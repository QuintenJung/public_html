<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
  <header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
    <div class="navbar-header">
    <img class="navbar-img" src="" alt="">
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="{{ url('/') }}">Home</a></li>
      <li><a href="{{ url('/secondpage') }}">secondpage</a></li>
      <li><a href="{{ url('/') }}"></a>nog niks</li>
      <li><a href="#">niks</a></li>
    </ul>
  </div>
</nav>
</header>

