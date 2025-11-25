<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
<header class="col">
  <img id="logo" class="col-2" src=" {{ asset('images/logoONC.png') }}" alt="Logo">
  <nav id="navHome" class="col-10 bg-light">
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link border border-dark rounded-5 active" href="/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link border border-dark rounded-5" href="/secondpage">Secondpage</a>
      </li>
    </ul>
  </nav>
</header>

