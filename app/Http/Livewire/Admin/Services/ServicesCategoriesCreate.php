<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\ServiceCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class ServicesCategoriesCreate extends Component
{
    use WithFileUploads;

    public $service_category , $image ,$imageTemp;


    public function store()
    {
        $this->validate([
            'service_category.name' => 'required',
            'service_category.description' => '',
            'service_category.image' => '',
        ]);

        if ($this->imageTemp) {
            $this->validate([ 'imageTemp' => 'image|mimes:jpeg,png,jpg,gif|max:2048' ]);
            $this->service_category['image'] = $this->imageTemp->store('service_categories/'.$this->id);
        }
        else{
            unset($this->service_category['image']);
        }

        $service_category = ServiceCategory::create($this->service_category);

        $this->emit('success',__("Added successfully"));
        $this->service_category = [];

    }


    public function render()
    {
        return view('livewire.admin.services.services-categories-create')->layout('layouts.admins.app');
    }

}
