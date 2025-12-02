@include('include.header')

<main>
    <form action="@yield('action')" method="get">
        @yield('content')
    </form>
</main>

@include('include.footer')