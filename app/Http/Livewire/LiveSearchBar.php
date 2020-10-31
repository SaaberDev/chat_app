<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class LiveSearchBar extends Component
{
    use WithPagination;

    protected string $paginationTheme = 'bootstrap';
    public $objects = [];
    public $search;
    public $recordPerPage = 12;
    public $filterByStatus = null;

    // Shows search query in URL
    protected $queryString = ['search'];

    public function resetSearch()
    {
        $this->reset('search');
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function render()
    {
        $search = '%' . $this->search . '%';
        $customers = Customer::where(function ($query) {
                $this->filterByStatus == '' ? $query->orderBy('id', 'asc') : $query->orWhere('status', '=', $this->filterByStatus);
            })
            ->where(function ($query) use ($search) {
                $query->orWhere('name', 'like', $search);
                $query->orWhere('username', 'like', $search);
            })
            ->paginate($this->recordPerPage);

        return view('livewire.live-search-bar', compact('customers'));
    }

}
