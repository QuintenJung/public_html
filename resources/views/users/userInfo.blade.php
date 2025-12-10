<?php
global $title;
$title = 'userInfo';
?>
@extends('layouts.def')
@section("content")
<div>
    <li>
        <a href="/user/{{ Auth::user()?->id }}/edit">{{$userInfo[0]["name"]}}</a>
    </li>
    <p>{{$userInfo[0]["email"]}}</p>
</div>
@endsection
