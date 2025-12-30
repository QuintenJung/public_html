<?php
global $title;
$title = 'Test';
?>

@extends('layouts.def')


@section('content')
    <p>{{ $content }} </p>
@endsection