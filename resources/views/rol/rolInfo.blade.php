<?php
global $title;
$title = 'rolInfo';
?>
@extends('layouts.def')
@section('content')
    <div>
        <div>
            <li>
                <a href="/rol/{{ $rolInfo[0]['id'] }}/edit">{{ $rolInfo[0]['email'] }}</a>
            </li>
            <p>{{ $rolInfo[0]['rol'] }}</p>
        </div>
    </div>
@endsection
