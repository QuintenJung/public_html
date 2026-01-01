<?php
global $title;
$title = 'inputToken';
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
            <form action="/token/{{ $data['id'] }}" method="GET">
                @csrf
                <input type="number" class="input validator" name ="token" required placeholder="6-digit number"/>
                <button type="submit" id="submitButton">submit</button><br>
            </form>
        </div>
    </div>
@endsection
