<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Product;
use Illuminate\Pagination\Paginator;

class Filter extends Component
{
    use WithPagination;
   
    public $searchTerm;
    public $currentPage = 1;

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';

        return view('livewire.filter', [
            'products'=>Product::where(function($searchTerm){
                        $searchTerm->where('product_name', 'like', '%'.$this->searchTerm.'%')
                        ->orWhere('product_slug', 'like', '%'.$this->searchTerm.'%')
                        ->orWhere('sku', 'like', '%'.$this->searchTerm.'%');
            })->paginate(5)
        ]);
    }
    public function setPage($url)
    {
        $this->currentPage = explode('page=', $url)[1];
        Paginator::currentPageResolver(function(){
            return $this->currentPage;
        });
    }
}