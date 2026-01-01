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
                    <input type="text" placeholder="Titel" name="title" class="input" />
                </div>
                <div>
                    <textarea name="content" class="textarea textarea-md" rows="5"></textarea>
                </div>
                <div>
                    <input type="hidden" name="userInfo" value="{{ $userInfo }}">
                </div>
                <input type="submit" value="Report" name="submit" id="submitButton" class="btn" />
            </form>
        </div>
    </div>
@endsection
