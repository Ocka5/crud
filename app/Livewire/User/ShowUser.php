<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class ShowUser extends Component
{
    public $user;
    public $name;
    public $city;
    public $country;

    public function mount($user){
        $this->user = $user;
        $this->name = $user->name;
        $this->city = $user->city->name;
        $this->country = $user->city->country->name;
    }


    public function render()
    {
        return view('livewire.user.show-user');
    }
}
