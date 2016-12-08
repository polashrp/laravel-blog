@extends('layouts.app')


        <!-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif -->

            
@section('content')
            <div class="container">
                <div class="row">
                <div class="title m-b-md">
                    Blog
                </div>
                </div>
            </div>
        </div>
@stop