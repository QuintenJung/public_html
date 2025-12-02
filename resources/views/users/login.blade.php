<?php
    global $title;
    $title = "login";
?>

@extends("layouts.form")

@section("content")
<form action="{{ route('user.store') }}" methode="POST">
    @csrf
    <h2>Input username:</h2>
    <input type="text" id="name" name="name" class="inputText"placeholder="Enter your username here..."><br>
    <h2>Input password:</h2>
    <input type="text" id="email" name="email" class="inputText" placeholder="Enter your email here..."><br>
    <h2>Repeat password:</h2>
    <input type="text" id="password" name="password" class="inputText" placeholder="Enter your password here..."><br>
    <button type="submit" id="submitButton">Done</button>
</form>
@endsection