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

    <div>
        <p>

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sagittis sit amet justo sed maximus. Cras condimentum vestibulum dolor, et suscipit sem hendrerit id. Phasellus id quam id massa fringilla dapibus ut nec nisi. Praesent bibendum arcu enim, vel luctus leo blandit non. Pellentesque ultricies ac ex placerat volutpat. Nullam nisl mauris, tristique at porttitor vel, posuere eu diam. Proin in malesuada dui, in venenatis eros. Nullam vitae lacus elit. Suspendisse id sem ut sapien blandit maximus.

In non leo eu diam fermentum rutrum. Quisque quis est est. Mauris pellentesque nisl sapien, dapibus congue eros placerat id. Nullam tempor urna. 
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sagittis sit amet justo sed maximus. Cras condimentum vestibulum dolor, et suscipit sem hendrerit id. Phasellus id quam id massa fringilla dapibus ut nec nisi. Praesent bibendum arcu enim, vel luctus leo blandit non. Pellentesque ultricies ac ex placerat volutpat. Nullam nisl mauris, tristique at porttitor vel, posuere eu diam. Proin in malesuada dui, in venenatis eros. Nullam vitae lacus elit. Suspendisse id sem ut sapien blandit maximus.

In non leo eu diam fermentum rutrum. Quisque quis est est. Mauris pellentesque nisl sapien, dapibus congue eros placerat id. Nullam tempor urna. 
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sagittis sit amet justo sed maximus. Cras condimentum vestibulum dolor, et suscipit sem hendrerit id. Phasellus id quam id massa fringilla dapibus ut nec nisi. Praesent bibendum arcu enim, vel luctus leo blandit non. Pellentesque ultricies ac ex placerat volutpat. Nullam nisl mauris, tristique at porttitor vel, posuere eu diam. Proin in malesuada dui, in venenatis eros. Nullam vitae lacus elit. Suspendisse id sem ut sapien blandit maximus.

In non leo eu diam fermentum rutrum. Quisque quis est est. Mauris pellentesque nisl sapien, dapibus congue eros placerat id. Nullam tempor urna. 
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sagittis sit amet justo sed maximus. Cras condimentum vestibulum dolor, et suscipit sem hendrerit id. Phasellus id quam id massa fringilla dapibus ut nec nisi. Praesent bibendum arcu enim, vel luctus leo blandit non. Pellentesque ultricies ac ex placerat volutpat. Nullam nisl mauris, tristique at porttitor vel, posuere eu diam. Proin in malesuada dui, in venenatis eros. Nullam vitae lacus elit. Suspendisse id sem ut sapien blandit maximus.

In non leo eu diam fermentum rutrum. Quisque quis est est. Mauris pellentesque nisl sapien, dapibus congue eros placerat id. Nullam tempor urna. 
</p>
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
