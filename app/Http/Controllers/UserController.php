<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        return view('welcome');
    }

    public function show(User $user){

        return view('show', compact('user'));
    }

    public function create(){

        return view('create');
    }

    public function edit(User $user){

        return view('edit', compact('user'));
    }
}
