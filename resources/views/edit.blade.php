@extends('layouts.app')

@section('content')
    @livewire('user.edit-user', ['user' => $user], key($user->id))
@endsection