<?php
global $title;
$title = 'editUser';
?>
@extends('layouts.form')
@section("content")
<form action="{{ route('user.update') }}" method="POST">
    @csrf
    @method('PUT')
    <h2>Youre info</h2>
    <p>{{$userInfo["name"]}}</p>
    <p>{{$userInfo["email"]}}</p>
    <input type="text" id="name" name="name" class="inputText"placeholder="{{$userInfo["name"]}}"><br>
    <button type="submit" id="submitButton">Change</button>
</form>
@endsection