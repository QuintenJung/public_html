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
        echo 'active';
    }
}
?>

<body>
    <header class="shadow bg-light">
        <nav class="navbar navbar-expand-sm nav-pills">
            <img src="{{ asset('images/logoONC.png') }}" id="logo">
            <ul class="nav nav-pills ms-3">
                <li class="nav-item">
                    <a class="nav-link <?php active('home'); ?>" href="/">home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php active('info'); ?>" href="/info">info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php active('login'); ?>" href="{{ route('user.create') }}">login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php active('devs'); ?>" href="/devs">*devs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php active('allUser'); ?>" href="/user">*all users</a>
                </li>
            </ul>
        </nav>
    </header>
