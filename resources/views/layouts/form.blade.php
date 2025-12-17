@include('include.header')

@yield('background')

<main>
    <div class="formMain">
        @yield('content')
    </div>
</main>


@include('include.footer')