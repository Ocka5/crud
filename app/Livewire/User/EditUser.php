<?php

namespace App\Livewire\User;

use App\Models\City;
use App\Models\Country;
use App\Models\User;
use Livewire\Component;

class EditUser extends Component
{
    public $user;
    public $name;
    public $city;
    public $country;

    public function mount(User $user)
    {
        $this->user = $user;
        $this->name = $user->name;
        $this->city = $user->city_id;
        $this->country = $user->city->country->name;
    }

    public function render()
    {
        $cities = City::all();

        return view('livewire.user.edit-user', compact('cities'));
    }

    public function updateCityList()
    {
        if ($this->city != $this->user->city_id) {
            $this->country = null;
        }
        $city = City::find($this->city);
        $this->country = $city->country->name;
    }

    public function update()
    {
        $this->user->name = $this->name;
        $this->user->city_id = $this->city;
        $this->user->save();

        return redirect()->route('user.index');
    }
}
