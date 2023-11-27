@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row justify-content-center mt-5">
                    <div class="col-6">
                        <div class="card shadow">
                            <h2 class="text-center mt-3"><u>Show Details</u></h2>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <p><strong>Name : {{ $users->name }}</strong></p>
                                        <p><strong>Email : {{ $users->email }}</strong></p>

                                        <a href="{{ route('home') }}" class="btn btn-secondary">Back</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img src="https://th.bing.com/th/id/OIP.J3Jw8CPha5YUKEkHoIOG0wHaEK?rs=1&pid=ImgDetMain"
                                        width="250" alt="" class="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
