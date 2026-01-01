<?php
global $title;
$title = 'tickets';
?>

@extends('layouts.def')


@section('content')
        <div class="m-4 p-2 bg-primary text-white rounded">
            <h4>title:</h4>
            <h4>{{ $data['title'] }}</h4><br>
            <h4>content:</h4>
            <h4>{{ $data['content'] }}</h4><br>
            <h5>ticket timestamp:</h5>
            <h5>{{ $data['created_at'] }}</h5><br>
            <h5>{{ $data['updated_at'] }}</h5><br>
            <h5>ticket id:</h5>
            <h5>{{ $data['id'] }}</h5><br>
            @if ($data['userInfo']!= "lockedOut")
                <h5>name:</h5>
                 <p>{{json_decode($data['userInfo'])->name}}</p><br>
                 <h5>email:</h5>
                 <p>{{json_decode($data['userInfo'])->email}}</p><br>
                 <h5>id:</h5>
                 <p>{{json_decode($data['userInfo'])->id}}</p><br>
                 <h5>timestamp:</h5>
                 <p>{{json_decode($data['userInfo'])->created_at}}</p><br>
                 <p>{{json_decode($data['userInfo'])->updated_at}}</p><br>
            @else
                <h3>user not loggedin</h3>
            @endif
            <a href="/bug/{{$data['id']}}/edit">Verander</a>
            <form action="/bug/{{$data['id']}}" method="POST" class="nav-item">
                @csrf
                @method('DELETE')
                <button type="submit" id="deleteButton">*Delete Ticket</button>
            </form>
        </div>
@endsection