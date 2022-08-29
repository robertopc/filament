<?php

namespace App\Http\Livewire;

use Filament\Forms;
use Livewire\Component;

class User extends Component implements Forms\Contracts\HasForms 
{
    use Forms\Concerns\InteractsWithForms;
    
    public function render()
    {
        return view('livewire.user');
    }
}
