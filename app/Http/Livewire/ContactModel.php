<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Livewire\Modal;

class ContactModel extends Modal
{
    public function mount()
    {
       
    }
    public function render()
    {
        return view('livewire.contact-model');
    }
}
