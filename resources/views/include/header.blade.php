<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
 <header class="shadow">
        <nav class="navbar navbar-expand-sm bg-light nav-pills">

            <div class="container-fluid justify-content-start me-5">
              <img src="{{ asset('images/logoONC.png') }}" id="logo">
                <ul class="nav nav-pills ms-3">
                    <li class="nav-item">
                        <a class="nav-link active" href="home">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="info">info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register">*register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="acountGui">*accountinfo</a>
                    </li>
                </ul>
            </div>

        </nav>
    </header>

