<?php

namespace App\Http\Livewire\Admin\Reservations;

use App\Models\Reservation;
use Livewire\Component;

class ReservationsCreate extends Component
{
    public $reservation;


    public function store()
    {
        $this->validate([
            'reservation.date' => 'nullable',
        ]);

        Reservation::create($this->reservation);

        $this->emit('success', __("Added successfully"));
        $this->reservation = [];

    }

    public function render()
    {
        return view('livewire.admin.reservations.reservations-create')->layout('layouts.admins.app');
    }

}
