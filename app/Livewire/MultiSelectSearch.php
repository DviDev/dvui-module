<?php

namespace Modules\DvUi\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Attributes\Locked;
use Livewire\Component;

class MultiSelectSearch extends Component
{
    public string $placeholder;
    public string $title;
    public string $modelClass;
    public array $searchFields;
    // Key to identify the selected item (ex: 'id', 'code', 'name')
    public ?string $searchKey = null;
    // Key to display the item (ex: 'name', 'description')
    public ?string $displayKey = null;
    public string $searchTerm = '';
    public array $searchResults = [];
    public $searchMinlength = 5;
    public array $selectedItems = [];
    public $componentLoading = false;
    public $id;
    public $event;
    public $eventItemAdded;
    public $eventItemRemoved;
    private $query_limit;
    #[Locked]
    private string|null $label;

    public function mount(
        string     $modelClass,
        array      $searchFields,
        string     $event = 'SearchTerm-Updated',
        string     $eventItemAdded = 'multiSelectSearchItemAdded',
        string     $eventItemRemoved = 'multiSelectSearchItemRemoved',
        ?string    $searchKey = 'id',
        ?string    $displayKey = 'name',
        int        $limit = null,
        int|string $id = null,
        string $label = null,
    ): void
    {
        $this->modelClass = $modelClass;
        $this->searchFields = $searchFields;
        $this->searchKey = $searchKey;
        $this->displayKey = $displayKey;
        $this->query_limit = $limit;
        $this->id = $id;
        $this->label = $label;
        $this->event = $event;
        $this->eventItemAdded = $eventItemAdded;
        $this->eventItemRemoved = $eventItemRemoved;

        $getting_via_db = false;
        $this->searchResults = $this->getItems($getting_via_db, 10);
    }

    protected function rules(): array
    {
        return [
            'searchTerm' => 'required|min:' . $this->searchMinlength,
        ];
    }
    protected function messages(): array
    {
        return [
            'searchTerm.required' => "O :attribute é obrigatório.",
            'searchTerm.min' => 'O :attribute é muito curto.',
        ];
    }

    protected function validationAttributes(): array
    {
        return [
            'searchTerm' => collect($this->searchFields)->join(', '),
        ];
    }

    public function updatedSearchTerm(): void
    {
        // Limpar resultados se o termo de busca estiver vazio
        if (empty($this->searchTerm)) {
            $this->searchResults = [];
            return;
        }

        $getting_via_db = false;

        $this->searchResults = $this->getItems($getting_via_db, $this->query_limit, $this->searchTerm);

        if ($getting_via_db) {
            $this->dispatch($this->event)->self();
        }
        $this->componentLoading = false;
    }

    public function render(): View
    {
        return view('dvui::livewire.multi-select-search');
    }

    protected function getItems(&$get_via_db, $query_limit, $searchTerm = null): array
    {
        $cache_key = '_multi-select-search-' . $this->id . '-'.$query_limit.'_' . $searchTerm;
        return cache()->rememberForever($cache_key, function () use (&$get_via_db, $query_limit, $searchTerm) {
            $get_via_db = true;

            $model = app($this->modelClass);
            $query = $model::query();

            $query->when($this->searchTerm, function (Builder $query) {
                foreach ($this->searchFields as $field) {
                    $query->orWhere($field, 'like', '%' . $this->searchTerm . '%');
                }
            });

            if ($query_limit) {
                $query->limit($query_limit); // Limita o número de resultados para otimização
            }
            return $query
                ->get($this->searchFields)
                ->toArray(); // Converte para array para evitar problemas de reatividade com objetos Eloquent complexos
        });
    }

    public function toggleSelection($itemId): void
    {
        $model = app($this->modelClass);
        $model = $model::query()->firstWhere($this->searchKey, $itemId);
        if ($model) {
            $itemArray = $model->toArray();
            //addItem
            if (!in_array($itemArray[$this->searchKey], array_column($this->selectedItems, $this->searchKey))) {
                $this->selectedItems[] = $itemArray;
                $this->dispatch($this->eventItemAdded, item: $itemArray);
                return;
            }

            //remove
            $this->selectedItems = collect($this->selectedItems)->filter(fn($i) => $i[$this->searchKey] !== $itemId)->all();

            $this->dispatch($this->eventItemRemoved, itemKey: $itemId);
        }
    }

    public function getItemId($key): string
    {
        return $this->id . '-item-'.$key;
    }
}
