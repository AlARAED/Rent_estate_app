<?php

namespace App\Http\Livewire\Admin\CountriesLists;


use App\Models\Country;
use Livewire\Component;
use Livewire\WithPagination;

class CountriesLists extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['refreshModal'];

    public $search, $name, $phone_code, $deleteId, $country_id, $create_country, $status, $Status, $iso2, $iso3, $region;

    public function search()
    {

    }

    function mount()
    {

        if (array_key_exists(request('status'), Country::statusList(false))) {
            $this->status = request('status');
        }

    }


    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function EditCountry($id)
    {
        $this->country_id = $id;
    }

    public function CreateCountry()
    {
        $this->create_country = rand(0, 10000);
    }

    public function Status($id)
    {
        $this->Status = $id;
    }

    public function active()
    {
        $status = '1';
        $countries = Country::findOrFail($this->Status);
        $countries->status = $status;
        $countries->save();
        $this->emit('success',__("Activated successfully"));
    }

    public function inactive()
    {

        $status = '0';
        $countries = Country::findOrFail($this->Status);
        $countries->status = $status;
        $countries->save();
        $this->emit('success',__("Canceled successfully"));

    }

    public function refreshModal()
    {
        $this->country_id = "";
        $this->create_country = "";
    }


//    public function delete()
//    {
//
//        $countries = Country::findOrFail($this->deleteId);
//
//        if (!auth()->user()->can('countries delete')) {
//            $this->emit('error', 'Country does not have the right permissions.');
//            return false;
//        }
//
//        $countries->delete();
//        $this->emit('success',__("Deleted successfully"));
//    }

    public function render()
    {

        $countries = Country::query();

        if ($this->name) {
            $countries = $countries->where('name', 'LIKE', '%' . $this->name . '%');
        }

        if ($this->iso2) {
            $countries = $countries->where('iso2', 'LIKE', '%' . $this->iso2 . '%');
        }

        if ($this->iso3) {
            $countries = $countries->where('iso3', 'LIKE', '%' . $this->iso3 . '%');
        }

        if ($this->phone_code) {
            $countries = $countries->where('phone_code', 'LIKE', '%' . $this->phone_code . '%');
        }


        if (array_key_exists($this->status, Country::statusList(false))) {
            $countries = $countries->where('status', $this->status);
        }

        $countries = $countries->orderBy('name', "ASC")->paginate(10);
        return view('livewire.admin.countries-lists.countries-lists', compact('countries'))->layout('layouts.admins.app');
    }


}
