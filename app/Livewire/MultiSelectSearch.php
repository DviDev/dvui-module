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
    protected $listeners = [
        'multiSelectRemoveItem' => 'removeItemById',
    ];
    private $query_limit;

    public function mount(
        string     $modelClass,
        array      $searchFields,
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
            $this->dispatch('SearchTerm-Updated', ['componentId' => $this->id])->self();
        }
        $this->componentLoading = false;
    }

    public function addItem(int $itemId): void
    {
        $model = app($this->modelClass);
        $item = $model::query()->firstWhere($this->searchKey, $itemId);
        if ($item) {
            $itemArray = $item->toArray();
            // Verifica se o item já foi selecionado para evitar duplicatas
            if (!in_array($itemArray[$this->searchKey], array_column($this->selectedItems, $this->searchKey))) {
                $this->selectedItems[] = $itemArray;
                // Emite um evento para o componente pai com o item selecionado
                $this->dispatch('multi-select-item-added', item: $itemArray, componentId: $this->getId());
            }
        }
        //$this->searchTerm = ''; // Limpa o campo de busca após a seleção
        //$this->searchResults = []; // Limpa os resultados da busca
    }

    public function removeItem(int $itemKey): void
    {
        $this->selectedItems = array_filter($this->selectedItems, function ($item) use ($itemKey) {
            return $item[$this->searchKey] !== $itemKey;
        });
        // Emite um evento para o componente pai com o item removido
        $this->dispatch('multi-select-item-removed', itemKey: $itemKey, componentId: $this->getId());
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
                $this->dispatch('multi-select-item-added', item: $itemArray, componentId: $this->getId());
                return;
            }

            //remove
            $this->selectedItems = collect($this->selectedItems)->filter(fn($i) => $i[$this->searchKey] !== $itemId)->all();

            $this->dispatch('multi-select-item-removed', itemKey: $itemId, componentId: $this->getId());
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
