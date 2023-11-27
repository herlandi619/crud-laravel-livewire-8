@extends('layouts.master')
@section('content')
    @livewire('user-edit', [
        'users' => $users,
    ])
@endsection
