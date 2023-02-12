<?php

namespace App\Http\Livewire\Admin\CountriesLists;

use App\Models\Country;
use Livewire\Component;

class CountriesListsEdit extends Component
{
    public $country;

    function mount($id)
    {

        $country = Country::findOrFail($id);
        $this->country = $country->toArray();

    }

    public function update()
    {
        $this->validate([
            'country.name' => 'required',
            'country.iso2' => 'required',
            'country.iso3' => 'required',
            'country.phone_code' => 'required|numeric',
            'country.price' => 'required|numeric',
        ]);

        $country = Country::findOrFail($this->country['id']);
        $country->update($this->country);
        $this->emit('success',__("Updated successfully"));
    }


    public function render()
    {
        return view('livewire.admin.countries-lists.countries-lists-edit')->layout('livewire.admin.app');
    }

}
