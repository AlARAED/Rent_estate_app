<?php

namespace App\Http\Livewire\Admin\CountriesLists;

use App\Models\Country;
use Livewire\Component;

class CountriesListsCreate extends Component
{
    public $country;


    public function store()
    {
        $this->validate([
            'country.name' => 'required',
            'country.iso2' => 'required',
            'country.iso3' => 'required',
            'country.phone_code' => 'required|numeric',
            'country.price' => 'required|numeric',
        ]);

        $country = Country::create($this->country);

        $this->emit('success',__("Added successfully"));
        $this->country = [];

    }


    public function render()
    {
        return view('livewire.admin.countries-lists.countries-lists-create')->layout('livewire.admin.app');
    }

}
