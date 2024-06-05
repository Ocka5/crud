<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class IndexUser extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $users = User::paginate(1);
        return view('livewire.user.index-user', compact('users'));
    }

    public function delete($userId){
        $user = User::find($userId);
        $user->delete();
    }
}