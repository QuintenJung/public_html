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
                    <input type="text" placeholder="Title" name="title" class="input title" />
                </div>
                <div>
                    <textarea class="textarea" name="content"></textarea>
                </div>
                <div>
                    <input type="hidden" name="userInfo" value="{{ $userInfo }}">
                </div>
                <input type="submit" value="Report" id="submitButton" class="btn" />
            </form>
        </div>
    </div>
    <div>
        <img src="{{ asset('images/bugReportButton.png') }}" alt="bug">
    </div>
@endsection
