<?php

namespace App\Livewire\Categories;

use App\Models\ProductCategory;
use Illuminate\Pagination\Paginator;
use Livewire\Component;
use Livewire\WithPagination;

class Content extends Component
{
    use WithPagination;

    public  $perPage = 10;
    public $search = '';

    public $name, $status;

    public  function  updatePerPage()
    {
	    $currentPage = 1;
	    Paginator::currentPageResolver(function () use ($currentPage) {
	        return  $currentPage;
	    });
	}

    public function paginationView()
    {
        return 'pages.pagination';
    }

    public function save()
    {
        dd('asd');
    }
    
    public function render()
    {
        return view('livewire.categories.content', [
            'data' => ProductCategory::where('name', 'like', '%'.$this->search.'%')->paginate($this->perPage)
        ]);
    }
}
