<?php

namespace App\Http\Livewire\Admin\CitiesLists;

use App\Models\City;
use App\Models\Country;
use Livewire\Component;


class CitiesListsCreate extends Component
{
    public $city, $countries, $states;

    function mount()
    {
        $this->countries = Country::get();
    }

    public function store()
    {
        $this->validate([
            'city.name' => 'required',
            'city.country_id' => 'required|exists:countries,id',
            'city.state_id' => 'required|exists:states,id',
        ]);

        $city = City::create($this->city);

        $this->emit('success', __('City successfully Added.'));
        $this->city = [];

    }

    public function render()
    {
        return view('livewire.admin.cities-lists.cities-lists-create')->layout('layouts.admins.app');
    }

}
