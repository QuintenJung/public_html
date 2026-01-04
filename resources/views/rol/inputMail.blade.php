<?php
global $title;
$title = 'inputMail';

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
            <form action="/rol" method="POST">
                @csrf
                <textarea name="email" class="textarea textarea-md" rows="5"></textarea>
                <input type="text" placeholder="rol" name="rol" class="input" />
                <input type="submit" id="submitButton" value="Report" name="submit" class="btn" />
            </form>
        </div>
    </div>
@endsection