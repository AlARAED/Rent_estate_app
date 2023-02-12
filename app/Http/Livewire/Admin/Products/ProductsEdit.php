<?php

namespace App\Http\Livewire\Admin\Products;

use App\Models\Product;
use App\Models\ProductDescription;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductsEdit extends Component
{
    use WithFileUploads;

    public $product, $image, $imageTemp, $services, $file, $product_descriptions = [['name' => '', 'number' => '', 'product_id' => '']];

    function mount($id)
    {
        $product = Product::findOrFail($id);
        $this->product = $product->toArray();
        $this->services = Service::where('status', 1)->get();
        $this->product_descriptions = ProductDescription::where('product_id', $id)->get()->toArray();
    }

    public function AddProductDescription()
    {
        $this->product_descriptions[] = ['name' => '', 'number' => '', 'product_id' => ''];
    }

    public function RemoveProductDescription($key)
    {
        unset($this->product_descriptions[$key]);
    }

    public function update()
    {
        $this->validate([
            'product.name' => 'required|max:255',
            'product.description' => '',
            'product.url_video' => 'nullable',
            'product.time_expiry' => 'nullable',
            'product.address' => 'required|max:2000',
            'product_descriptions.*.name' => 'required|string|max:255',
            'product_descriptions.*.number' => 'required|numeric',
            'product.service_id' => 'required|exists:services,id',
        ]);

        if ($this->imageTemp) {
            $this->product['image'] = $this->imageTemp->store('products/' . $this->id);
            $this->validate(['imageTemp' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
        } else {
            unset($this->product['image']);
        }

        if (!empty($this->product['file']) and !is_string($this->product['file'])) {
            $this->validate(['product.file' => 'nullable|max:10240|mimes:pdf']);
            $this->product['file'] = $this->product['file']->store('products/files/' . $this->id);
        } else {
            unset($this->product['file']);
        }

        $product = Product::findOrFail($this->product['id']);
        $product->update($this->product);
        ProductDescription::where('product_id', $product->id)->forceDelete();
        foreach ($this->product_descriptions as $key => $product_description) {
            $product_description['product_id'] = $product->id;
            ProductDescription::create($product_description);
        }
        $this->emit('success', __("Updated successfully"));
    }


    public function render()
    {

        return view('livewire.admin.products.products-edit')->layout('layouts.admins.app');
    }

}
