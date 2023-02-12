<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\Service;
use App\Models\ServiceCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class ServicesCreate extends Component
{

    use WithFileUploads;

    public $service , $image ,$imageTemp ,$service_categories;

    function mount(){

        $this->service_categories = ServiceCategory::get();
    }

    public function store()
    {
        $this->validate([
            'service.title' => 'required|max:255',
            'service.description' => 'nullable',
            'service.service_category_id' => 'required|exists:service_categories,id',

        ]);

        if ($this->imageTemp) {
            $this->validate([ 'imageTemp' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048' ]);
            $this->service['image'] = $this->imageTemp->store('services/'.$this->id);
        }
        else{
            unset($this->service['image']);
        }

        $service = Service::create($this->service);

        $this->emit('success',__("Added successfully"));
        $this->service = [];

    }


    public function render()
    {

        return view('livewire.admin.services.services-create')->layout('layouts.admins.app');
    }

}
