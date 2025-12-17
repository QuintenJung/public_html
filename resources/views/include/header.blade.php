<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    @vite('resources/css/app.css')
</head>
<?php
function active($str)
{
    global $title;
    if ($str === $title) {
        echo 'class="active"';
    }
}
?>

<body>
    <header>
        <div>
            <a href="/">
                <img src="{{ asset('images/orangequest-header.png') }}" id="logo">
            </a>
        </div>
        <nav>
            <ul>
                <li>
                    <a <?= active("info") ?> href="/info">Wat is Orange Quest?</a>
                </li>
                {{-- <li>
                    <a href="/user/create">maak acc</a>
                </li>
                <li>
                    <a href="/devs">*devs</a>
                </li>
                <li>
                    <a href="/user">*all users</a>
                </li>
                <li>
                    <a href="/user/{{ Auth::user()?->id }}/edit">*edit</a>
                </li>
                <li>
                    <a href="/user/login">*login</a>
                </li>
                <form action="/user/{{ Auth::user()?->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" id="deleteButton">*Delete account</button>
                </form>
                <li>
                    <a href="/Logout">*logout</a>
                </li> --}}
            </ul>

            {{-- username --}}
            {{-- {{ Auth::user()?->name }} --}}
        </nav>
    </header>

