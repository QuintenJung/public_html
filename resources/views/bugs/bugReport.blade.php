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
            <form action="/bug" method="POST">
                @csrf
                <div>
                    <input type="text" placeholder="Title" name="title" class="input" />
                    {{-- <label>Ticket</label> --}}
                    {{-- <input type="text" id="title" name="title" class="inputText" placeholder="Title"><br> --}}
                </div>
                <div>
                    <textarea name="content" class="textarea textarea-md" rows="5"></textarea>
                    {{-- <textarea name="content" id="content" rows="5" cols="60"></textarea><br> --}}
                </div>
                <div>
                    <input type="hidden" name="userInfo" value="{{ $userInfo }}">
                </div>
                <input type="submit" value="Report" name="submit" class="btn" />
            </form>
        </div>
    </div>
@endsection
