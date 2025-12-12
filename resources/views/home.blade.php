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
    <div class="content">
        <iframe src="https://www.youtube.com/embed/e-ZOmSrgt1w" title="ONC Persoonlijk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
        </iframe>
        <iframe  src="https://www.youtube.com/embed/YVpC0DwuoQE" title="ONC Excellent" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
        </iframe>
        <iframe src="https://www.youtube.com/embed/Qyko4rJQrdg" title="ONC Ondernemend" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
        </iframe>
    </div>
@endsection
