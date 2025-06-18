<?php

namespace Modules\DvUi\Livewire;

use Illuminate\Database\Eloquent\Builder;
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

    public function mount(
        string     $modelClass,
        array      $searchFields,
        string $event = 'SearchTerm-Updated',
        string $eventItemAdded = 'multiSelectSearchItemAdded',
        string $eventItemRemoved = 'multiSelectSearchItemRemoved',
        ?string    $searchKey = 'id',
        ?string    $displayKey = 'name',
        int        $limit = null,
        int|string $id = null,
    ): void
    {
        $this->modelClass = $modelClass;
        $this->searchFields = $searchFields;
        $this->searchKey = $searchKey;
        $this->displayKey = $displayKey;
        $this->query_limit = $limit;
        $this->id = $id;
        $this->event = $event;
        $this->eventItemAdded = $eventItemAdded;
        $this->eventItemRemoved = $eventItemRemoved;
    }

    public function updatedSearchTerm(): void
    {
        // Limpar resultados se o termo de busca estiver vazio
        if (empty($this->searchTerm)) {
            $this->searchResults = [];
            return;
        }

        $getting_via_db = false;

        $this->searchResults = $this->getItems($getting_via_db);

        if ($getting_via_db) {
            $this->dispatch($this->event)->self();
        }
        $this->componentLoading = false;
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

    // Adiciona um item à lista de selecionados

    public function render()
    {
        return view('dvui::livewire.multi-select-search');
    }

    // Remove um item da lista de selecionados

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

    // Renderiza a view do componente

    protected function validationAttributes(): array
    {
        return [
            'searchTerm' => collect($this->searchFields)->join(', '),
        ];
    }

    protected function getItems(&$get_via_db)
    {
        $cache_key = 'multi-select-search-' . $this->id . '-' . $this->searchTerm;
        return cache()->rememberForever($cache_key, function () use (&$get_via_db) {
            $get_via_db = true;

            $model = app($this->modelClass);

            $query = $model::query()
                ->when($this->searchTerm, function (Builder $query) {
                    foreach ($this->searchFields as $field) {
                        $query->orWhere($field, 'like', '%' . $this->searchTerm . '%');
                    }
                });
            if ($this->query_limit) {
                $query->limit($this->query_limit); // Limita o número de resultados para otimização
            }
            return $query->get()
                ->toArray(); // Converte para array para evitar problemas de reatividade com objetos Eloquent complexos
        });
    }
}
