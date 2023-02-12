<?php

namespace App\Http\Livewire\Admin\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['refreshModal'];


    public $search, $name, $description, $deleteId, $product_id ,$image ,$imageTemp ,$create_product ,$status ,$Status;

    public function search()
    {
        $this->page = 1;
    }

    function mount(){
        if (array_key_exists(request('status'), Product::statusList(false))) {
            $this->status = request('status');
        }
    }

    public function Status($id)
    {
        $this->Status = $id;
    }

    public function active()
    {
        $status = '1';

        $products = Product::findOrFail($this->Status);
        $products->status = $status;

        $products->save();

        $this->emit('success',__("Activated successfully"));

    }

    public function inactive()
    {

        $status = '0';

        $products = Product::findOrFail($this->Status);
        $products->status = $status;

        $products->save();

        $this->emit('success',__("Canceled successfully"));

    }


    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function EditProduct($id)
    {
        $this->product_id = $id;
    }
    public function CreateProduct()
    {
        $this->create_product = rand(0,10000);
    }


    public function refreshModal()
    {
        $this->product_id = "";
        $this->create_product = "";
    }


    public function delete()
    {

        $products = Product::findOrFail($this->deleteId);

        if (!auth()->user()->can('products delete')) {
            $this->emit('error','products does not have the right permissions.');
            return false;
        }

        $products->delete();
        $this->emit('success',__("Deleted successfully"));

    }

    public function render()
    {
        $products = Product::query();

        if ($this->name) {
            $products = $products->where('name', 'LIKE', '%' . $this->name . '%');
        }
        if ($this->description) {
            $products = $products->where('description', 'LIKE', '%' . $this->description . '%');
        }

        if(array_key_exists($this->status,Product::statusList(false))){
            $products = $products->where('status', $this->status);
        }

        $products = $products->orderBy('created_at', "DESC")->paginate(10);
        return view('livewire.admin.products.products', compact('products'))->layout('layouts.admins.app');
    }

}
