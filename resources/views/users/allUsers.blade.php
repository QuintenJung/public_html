<?php
global $title;
$title = 'allUsers';
?>

@extends('layouts.def')


@section('content')
    @foreach ($data as $user)
        <div class="m-4 p-2 bg-primary text-white rounded">
            <a href="/user/{{$user['id']}}/edit">{{ $user['name'] }}</a>
            <p>{{ $user['email'] }}</p>
        </div>
    @endforeach
@endsection
