<?php
global $title;
$title = 'editRol';

?>
@extends('layouts.form')


@section('background')
    <div>
        <img src="{{ asset('images/ONC-persoonlijk-768x542.jpg') }}" class="backgroundImg">
    </div>
@endsection



@section('content')
    <div>
        <div>
            <form action="/rol/{{ $rolInfo[0]['id'] }}" method="POST">
                @csrf
                @method('PUT')
                <label>Change rol</label>
                <p>{{ $rolInfo[0]['email'] }}</p>
                <input type="text" placeholder="{{ $rolInfo[0]['rol'] }}" name="rol" class="input" />
                <input type="submit" id="submitButton" value="Report" name="submit" class="btn" />
            </form>
            <form action="/rol/{{ $rolInfo[0]['id'] }}" method="POST" class="nav-item">
                @csrf
                @method('DELETE')
                <button type="submit" id="deleteButton">*No rol</button>
            </form>
        </div>
    </div>
@endsection
