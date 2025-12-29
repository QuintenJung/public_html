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
            <form action="/bug" method="POST">
                @csrf
                <div>
                    <label>Ticket</label>
                    <input type="text" id="title" name="title" class="inputText" placeholder="Title"><br>
                </div>
                <div>
                    <textarea name="content" id="content" rows="5" cols="60"></textarea><br>
                </div>
                <div>
                    <input type="hidden" name="userInfo" value="{{ $userInfo }}">
                </div>
                <button type="submit" id="submitButton">Report</button>
            </form>
        </div>
    </div>
@endsection
