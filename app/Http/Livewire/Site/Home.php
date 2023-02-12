<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;

class Home extends Component
{

    function mount()
    {

        return $this->redirect(route('admin.login'));
    }

    public function render()
    {
        return view('livewire.site.home')->layout('layouts.site.app');
    }
}
