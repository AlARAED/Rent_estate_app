<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\Service;
use App\Models\ServiceCategory;
use Livewire\Component;
use Livewire\WithPagination;

class ServicesCategories extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['refreshModal'];


    public $search, $name, $description, $deleteId, $service_category_id ,$image ,$imageTemp  ,$create_service_category;

    public function search()
    {

    }

    function mount(){

    }


    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function EditServiceCategory($id)
    {
        $this->service_category_id = $id;
    }

    public function CreateServiceCategory()
    {
        $this->create_service_category = rand(0, 10000);
    }

    public function refreshModal()
    {
        $this->service_category_id = "";
        $this->create_service_category = "";
    }


    public function delete()
    {

        $service_categories = ServiceCategory::findOrFail($this->deleteId);

        if (!auth()->user()->can('services categories delete')) {
            session()->flash('danger', 'Service Category does not have the right permissions.');
            return redirect()->route('admin.service-categories');
        }

        $service_categories->delete();
        $this->emit('success',__("Deleted successfully"));

    }

    public function render()
    {
        $service_categories = ServiceCategory::query();

        if ($this->name) {
            $service_categories = $service_categories->where('name', 'LIKE', '%' . $this->name . '%');
        }
        if ($this->description) {
            $service_categories = $service_categories->where('description', 'LIKE', '%' . $this->description . '%');
        }

        $service_categories = $service_categories->orderBy('created_at', "DESC")->paginate(10);
        return view('livewire.admin.services.services-categories', compact('service_categories'))->layout('layouts.admins.app');
    }

}
