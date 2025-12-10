<?php
    global $title;
    $title = "info";
?>

@extends('layouts.def')



@section('content')
    <div>
        <img src="{{ asset('images/jongens-in-de-klas-768x542.jpg') }}" class="backgroundImg">
    </div>
    <p id="infoText">dit is de info pagina, Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, delectus nostrum in harum quidem consequatur aperiam numquam dolor necessitatibus at eveniet quam ducimus nam eligendi nobis odio dolores totam nemo.</p>
@endsection