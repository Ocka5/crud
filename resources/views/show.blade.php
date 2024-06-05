@extends('layouts.app')

@section('content')
    @livewire('user.show-user', ['user' => $user], key($user->id))
@endsection