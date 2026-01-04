<?php
global $title;
$title = 'allRols';
?>

@extends('layouts.def')


@section('content')
    @foreach ($data as $rol)
        <div class="m-4 p-2 bg-primary text-white rounded">
            <a href="/rol/{{$rol['id']}}/edit">{{ $rol['email'] }}</a>
            <p>{{ $rol['rol'] }}</p>
        </div>
    @endforeach
@endsection
