<?php
global $title;
$title = 'allTokens';
?>

@extends('layouts.def')


@section('content')
    @foreach ($data as $resetTokens)
        <div class="m-4 p-2 bg-primary text-white rounded">
            <h4>{{ $resetTokens['id'] }}</h4>
        </div>
    @endforeach
@endsection