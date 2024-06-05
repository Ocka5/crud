<?php

namespace App\Livewire\User;

use App\Models\City;
use App\Models\Country;
use App\Models\User;
use Livewire\Component;

class CreateUser extends Component
{
    public $name;
    public $email;
    public $password;
    public $city = "";
    public $country = "";

    public function render()
    {
        $countries = Country::all();
        $cities = City::where('country_id', $this->country)->get();

        return view('livewire.user.create-user', compact('countries', 'cities'));
    }


    public function create(){
        
        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = $this->password;
        $user->city_id = $this->city;

        $user->save();
       
        return redirect()->route('user.index');
    }
}
