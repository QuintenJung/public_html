<?php
    global $title;
    $title = "home";
?>

@extends('layouts.def')

@section('background')
    <video class="relative w-full min-h-full h-auto max-w-full z-index-n1" autoplay="" muted="" loop="">
      <source src="{{ asset('images/onc_parkdreef.mp4') }}" type="video/mp4">
      Your browser does not support the video tag.
    </video>
@endsection

@section('content')

      <div id="wrapper">
        <p>dit is de home pagina</p>
      </div>
@endsection