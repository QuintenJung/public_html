<?php
global $title;
$title = 'resetPassword';
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
            <form action="/user/{{ $userId }}/updatePasswordReset" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <label class="input validator">
                        <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none"
                                stroke="currentColor">
                                <path
                                    d="M2.586 17.414A2 2 0 0 0 2 18.828V21a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h1a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h.172a2 2 0 0 0 1.414-.586l.814-.814a6.5 6.5 0 1 0-4-4z">
                                </path>
                                <circle cx="16.5" cy="7.5" r=".5" fill="currentColor"></circle>
                            </g>
                        </svg>
                        <input type="password" name="password" required placeholder="Wachtwoord"/>
                    </label>
                </div>
                <div>
                    <label class="input validator">
                        <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none"
                                stroke="currentColor">
                                <path
                                    d="M2.586 17.414A2 2 0 0 0 2 18.828V21a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h1a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h.172a2 2 0 0 0 1.414-.586l.814-.814a6.5 6.5 0 1 0-4-4z">
                                </path>
                                <circle cx="16.5" cy="7.5" r=".5" fill="currentColor"></circle>
                            </g>
                        </svg>
                        <input type="password" name="password_confirmation" required placeholder="herhaal Wachtwoord"/>
                    </label>
                </div>
                <input type="submit" value="Klaar" name="submit" id="submitButton" class="btn" />
            </form>
        </div>
    </div>
@endsection
