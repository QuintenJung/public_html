<?php
global $title;
$title = 'userInfo';
?>
@extends('layouts.def')
@section("content")
<div>
    <p>{{$userInfo[0]["name"]}}</p>
    <p>{{$userInfo[0]["email"]}}</p>
</div>
@endsection
