<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\Service;
use App\Models\ServiceCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class ServicesEdit extends Component
{
    use WithFileUploads;

    public $service ,$image ,$imageTemp , $service_categories;

    function mount($id){

        $service = Service::findOrFail($id);
        $this->service = $service->toArray();
        $this->service_categories = ServiceCategory::get();

    }

    public function update()
    {
        $this->validate([
            'service.title' => 'required|max:255',
            'service.description' => 'nullable',
            'service.service_category_id' => 'required|exists:service_categories,id',
        ]);


        if ($this->imageTemp) {
            $this->service['image'] = $this->imageTemp->store('services/'.$this->id);
            $this->validate([ 'imageTemp' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048' ]);
        }else{
            unset($this->service['image']);
        }

        $service = Service::findOrFail($this->service['id']);
        $service->update($this->service);
        $this->emit('success',__("Updated successfully"));
    }


    public function render()
    {

        return view('livewire.admin.services.services-edit')->layout('layouts.admins.app');
    }

}
