<?php
global $title;
$title = 'editUser';
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
            <form action="/user/{{ $userInfo[0]['id'] }}" method="POST">
                @csrf
                @method('PUT')
                <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4">
                    <h4>Username: {{ $userInfo[0]['name'] }}</h4>
                    <h4>Email: {{ $userInfo[0]['email'] }}</h4>
                </fieldset>
                <label class="input validator w-80">
                    <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none"
                            stroke="currentColor">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </g>
                    </svg>
                    <input type="text" placeholder="{{ $userInfo[0]['name'] }}" name="name" />
                </label><br>
                <input type="submit" value="Submit" id="submitButton" class="btn" />
            </form>
            <form action="/user/{{ Auth::user()?->id }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete account" id="deleteButton" class="btn" />
            </form>
            </form>
        </div>
    </div>
@endsection
