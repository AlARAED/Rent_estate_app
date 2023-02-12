<?php

namespace App\Http\Livewire\Admin;

use App\Models\Ad;
use App\Models\Coin;
use App\Models\Contact;
use App\Models\Order;
use App\Models\Product;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Home extends Component
{

    public $models;

    public function mount()
    {

        if (auth()->check() and auth()->user()->hasRole('Admin')) {
            $this->models = [
                'Users' => User::count(),
                'Roles' => Role::count(),
                'Services Categories' => ServiceCategory::count(),
                'Services' => Service::count(),
                'Products' => Product::count(),
                'Ads' => Ad::count(),
                'Contacts' => Contact::count(),
            ];

        } else {
            $this->models = [];
        }

    }

    public function render()
    {
        return view('livewire.admin.home')->layout('layouts.admins.app');
    }
}
