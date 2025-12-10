<?php
global $title;
$title = 'home';
?>

@extends('layouts.def')

@section('background')
    <video class="background-video" autoplay="" muted="" loop="">
        <source src="{{ asset('images/onc_parkdreef.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
@endsection

@section('content')
    <div class="news">
        <a>
            <p>lorem</p>
        </a>
        <a>
            <img src="{{ asset('images/jongens-in-de-klas-768x542.jpg') }}">
            <p>lorem</p>
        </a>
    </div>
@endsection
