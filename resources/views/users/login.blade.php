<?php
global $title;
$title = 'login';
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
            <form action="/user/login" method="POST">
                @csrf
                <label>email of name:</label>
                <input type="text" id="login" name="login" class="inputText"><br>

                <label>password:</label>
                <input type="password" id="password" name="password" class="inputText"><br>

                <button type="submit" id="submitButton">Done</button>
            </form>
        </div>
    </div>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
    @endif

@endsection
