<?php
global $title;
$title = 'allBugs';
?>

@extends('layouts.def')


@section('content')
    @foreach ($data as $bug)
        <div class="m-4 p-2 bg-primary text-white rounded">
            <a href="/bug/{{$bug['id']}}">{{ $bug['title'] }}</a>
            <p>{{ $bug['content'] }}</p>
            @if ($bug['userInfo']!= "lockedOut")
                <p>{{json_decode($bug['userInfo'])->name}}</p>
                <p>{{json_decode($bug['userInfo'])->email}}</p>
            @endif
        </div>
    @endforeach
@endsection
