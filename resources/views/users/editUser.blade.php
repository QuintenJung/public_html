<?php
global $title;
$title = 'editUser';
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
            <form action="/user/{{ $userInfo[0]['id'] }}" method="POST">
                @csrf
                @method('PUT')
                <h2>Your info</h2>
                <h4>Username: {{ $userInfo[0]['name'] }}</h4>
                <h4>Email: {{ $userInfo[0]['email'] }}</h4>
                <label>Change username</label>
                <input type="text" id="name" name="name"
                    class="inputText"placeholder="{{ $userInfo[0]['name'] }}"><br>
                <button type="submit" id="submitButton">Change</button><br>
                <form action="/user/{{ Auth::user()?->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" id="deleteButton">*Delete account</button>
                </form>
            </form>
        </div>
    </div>
@endsection
