<?php
global $title;
$title = 'login';
?>

@extends('layouts.form')

@section('content')
    <form action="/user/login" method="POST">
        @csrf
        <h2>email of name:</h2>
        <input type="text" id="login" name="login" class="inputText" placeholder="Enter your email of name here..."><br>
        <h2>password:</h2>
        <input type="password" id="password" name="password" class="inputText" placeholder="Enter your password here..."><br>
        <button type="submit" id="submitButton">Done</button>
    </form>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
    @endif

@endsection
