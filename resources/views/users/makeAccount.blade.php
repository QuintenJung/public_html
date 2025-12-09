<?php
    global $title;
    $title = "account aanmaken";
?>

@extends("layouts.form")

@section("content")
<div class="d-flex justify-content-center px-4 py-4" id="ass_form">
<form action="/user" method="POST">
    @csrf
    <div class="mb-3">
    <label class="form-label">name:</label>
    <input type="text" id="name" name="name" class="form-control" placeholder="Enter your username here...">
    </div>
    <div>
    <label class="form-label">email:</label>
    <input type="text" id="email" name="email" class="form-control" placeholder="Enter your email here...">
    </div>
    <div>
    <label class="form-label">password:</label>
    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password here...">
    </div>
    <div>
    <label class="form-label">herhaal password:</label>
    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Enter your password here...">
    </div>
    <button type="submit" class="btn btn-primary" id="submitButton">Done</button>
</form>
</div>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }}<br>
        @endforeach
    @endif
    
@endsection