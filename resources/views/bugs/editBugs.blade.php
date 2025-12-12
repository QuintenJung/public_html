<?php
global $title;
$title = 'editTicket';

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
            <form action="/bug/{{ $data['id'] }}" method="POST">
                @csrf
                @method('PUT')
                <label>Change Ticket</label>
                <input type="text" id="title" name="title" class="inputText" placeholder="{{ $data['title'] }}"><br>
                <textarea name="content" id="content" rows="5" cols="60" placeholder="{{ $data['content'] }}"></textarea><br>
                <button type="submit" id="submitButton">Change</button>
            </form>
        </div>
    </div>
@endsection
