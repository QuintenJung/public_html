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
                <img src="{{ asset('images/favicon-32x32.png') }}" id="mobileLogo">
            </a>
            <a href="/">
                <img src="{{ asset('images/orangequest-header.png') }}" id="logo">
            </a>
        </div>
        <nav>
            <ul>
                <li>
                    <a <?= active('info') ?> href="/info">Wat is Orange Quest?</a>
                </li>
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn m-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block h-5 w-5 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </div>
                    <ul tabindex="-1" class="dropdown-content menu bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
                        <li><a>Item 1</a></li>
                        <li><a>Item 2</a></li>
                    </ul>
                </div>
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
