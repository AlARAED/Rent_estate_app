<?php

namespace App\Http\Livewire\Admin\Products;

use App\Models\Product;
use App\Models\ProductDescription;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductsCreate extends Component
{
    use WithFileUploads;

    public $product, $image, $imageTemp, $services, $file, $product_descriptions = [['name' => '', 'number' => '', 'product_id' => '']];

    public function AddProductDescription()
    {
        $this->product_descriptions[] = ['name' => '', 'number' => '', 'product_id' => ''];
    }

    public function RemoveProductDescription($key)
    {
        unset($this->product_descriptions[$key]);
    }

    function mount()
    {
        $this->services = Service::where('status', 1)->get();
    }

    public function store()
    {
        $this->validate([
            'product.name' => 'required|max:255',
            'product.description' => '',
            'product.url_video' => 'required',
            'product.time_expiry' => 'required',
            'product.address' => 'required|max:2000',
            'product_descriptions.*.name' => 'required|string|max:255',
            'product_descriptions.*.number' => 'required|numeric',
            'product.service_id' => 'required|exists:services,id',
        ]);

        if ($this->imageTemp) {
            $this->validate(['imageTemp' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
            $this->product['image'] = $this->imageTemp->store('products/' . $this->id);
        } else {
            unset($this->product['image']);
        }

        if (isset ($this->product['file'])) {
            $this->validate(['product.file' => 'nullable|max:10240|mimes:pdf']);
            $this->product['file'] = $this->product['file']->store('products/files/' . $this->id);
        }

        $product = Product::create($this->product);

        foreach ($this->product_descriptions as $key => $product_description) {
            $product_description['product_id'] = $product->id;
            ProductDescription::create($product_description);
        }

        $this->emit('success', __("Added successfully"));
        $this->product = [];

    }

    public function render()
    {

        return view('livewire.admin.products.products-create')->layout('layouts.admins.app');
    }

}
