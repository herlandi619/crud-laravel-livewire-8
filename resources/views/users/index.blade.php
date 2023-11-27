@extends('layouts.master')
@section('content')
    <div class="container">
        <h1 class="text-center">Belajar Livewire Laravel</h1>

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show text-center
            " role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="row mt-5">
            <div class="col-md-4">
                <div>@livewire('user-create')</div>
            </div>
            <div class="col-md-8">
                <div>@livewire('user-table')</div>
            </div>
        </div>

    </div>
@endsection
