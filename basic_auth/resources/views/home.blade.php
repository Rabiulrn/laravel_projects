<!-- resources/views/home.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Home') }}</div>

                    <div class="card-body">
                        <p>Welcome to our application!</p>
                        <p>This is the home page.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
s