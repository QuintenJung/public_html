<?php
global $title;
$title = 'editUser';

?>
@extends('layouts.form')
@section("content")
<form action="/bug" method="POST">
    @csrf
    <h2>Ticket</h2>
    <input type="text" id="title" name="title" class="inputText" placeholder="Title"><br>
    <textarea name="content" id="content" rows="5" cols="60"></textarea><br>
    <input type="hidden" name="userInfo" value="{{$userInfo}}">
    <button type="submit" id="submitButton">Report</button>
</form>
@endsection