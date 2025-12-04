<?php
global $title;
$title = 'userInfo';
?>
@extends('layouts.def')
@section("content")
<div>
    <p>{{$userInfo["name"]}}</p>
    <p>{{$userInfo["email"]}}</p>
</div>
@endsection
