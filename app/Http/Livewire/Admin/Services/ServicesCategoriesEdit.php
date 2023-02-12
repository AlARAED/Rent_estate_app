<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\ServiceCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class ServicesCategoriesEdit extends Component
{
    use WithFileUploads;

    public $service_category ,$image ,$imageTemp ;

    function mount($id){

        $service_category = ServiceCategory::findOrFail($id);
        $this->service_category = $service_category->toArray();

    }

    public function update()
    {
        $this->validate([
            'service_category.name' => 'required',
            'service_category.description' => '',
        ]);

        if ($this->imageTemp) {
            $this->validate([ 'imageTemp' => 'image|mimes:jpeg,png,jpg,gif|max:2048' ]);
            $this->service_category['image'] = $this->imageTemp->store('service_categories/'.$this->id);
        }else{
            unset($this->service_category['image']);
        }

        $service_category = ServiceCategory::findOrFail($this->service_category['id']);
        $service_category->update($this->service_category);
        $this->emit('success',__("Updated successfully"));
    }


    public function render()
    {
        return view('livewire.admin.services.services-categories-edit')->layout('layouts.admins.app');
    }

}
