<?php
    global $title;
    $title = "login";
?>

@extends("layouts.form")

@section("action")
    loggedin
@endsection

@section("content")
    <h2>Input username:</h2>
    <input type="text" id="username" class="inputText"placeholder="Enter your username here..."><br>
    <h2>Input password:</h2>
    <input type="text" id="password1" class="inputText" placeholder="Enter your password here..."><br>
    <h2>Repeat password:</h2>
    <input type="text" id="password2" class="inputText" placeholder="Repeat your password here..."><br>
    <button type="submit" id="submitButton" value="Done">Done</button>
@endsection