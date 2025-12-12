<?php
global $title;
$title = 'account aanmaken';
?>





@extends('layouts.form')

@section('background')
    <div>
        <img src="{{ asset('images/ONC-persoonlijk-768x542.jpg') }}" class="backgroundImg">
    </div>
@endsection




@section('content')
    <div>
        <div>
            <form action="/user" method="POST">
                @csrf
                <div>
                    <label>Name</label><br>
                    <input type="text" id="name" name="name">
                </div>
                <div>
                    <label>Email</label><br>
                    <input type="text" id="email" name="email">
                </div>
                <div>
                    <label>Password</label><br>
                    <input type="password" id="password" name="password">
                </div>
                <div>
                    <label>Herhaal Password</label><br>
                    <input type="password" id="password_confirmation" name="password_confirmation">
                </div><br>
                <button type="submit" id="submitButton">Done</button>
            </form>
        </div>
    </div>


    <div>
        <img src="{{ asset('images/logoONC.png') }}">
    </div>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
    @endif

@endsection
