<?php

namespace App\Http\Livewire;

use Filament\Forms;
use Livewire\Component;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class User extends Component implements Forms\Contracts\HasForms 
{
    use Forms\Concerns\InteractsWithForms; 

    public function mount(): void
    {
        $this->form->fill([
        ]);
    }
 
    protected function getFormSchema(): array 
    {
        return [
                TextInput::make('name'),
                TextInput::make('password')
                ->password(),

                TextInput::make('email')
            // ...
        ];
    } 
 
    public function submit(): void
    {
        \App\Models\User::create($this->form->getState());
        
        redirect('/cadastro','refresh');
        
    }

    public function render()
    {
        return view('livewire.user');
    }
}
