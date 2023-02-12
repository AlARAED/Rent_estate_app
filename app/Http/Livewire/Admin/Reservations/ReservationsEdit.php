<?php

namespace App\Http\Livewire\Admin\Reservations;

use App\Models\Reservation;
use Livewire\Component;

class ReservationsEdit extends Component
{
    public $reservation;

    function mount($id){

        $reservation = Reservation::findOrFail($id);
        $this->reservation = $reservation->toArray();
    }

    public function update()
    {
        $this->validate([
            'reservation.date' => 'required',
        ]);

        $reservation = Reservation::findOrFail($this->reservation['id']);
        $reservation->update($this->reservation);
        $this->emit('success',__("Updated successfully"));
    }


    public function render()
    {
        return view('livewire.admin.reservations.reservations-edit')->layout('layouts.admins.app');
    }

}
