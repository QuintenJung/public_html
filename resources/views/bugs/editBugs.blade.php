<?php
global $title;
$title = 'editTicket';

?>
@extends('layouts.form')
@section("content")
<form action="/bug/{{$data['id']}}" method="POST">
    @csrf
    @method('PUT')
    <h2>Change Ticket</h2>
    <input type="text" id="title" name="title" class="inputText" placeholder="{{ $data['title'] }}"><br>
    <textarea name="content" id="content" rows="5" cols="60" placeholder="{{ $data['content'] }}"></textarea><br>
    <button type="submit" id="submitButton">Change</button>
</form>
@endsection