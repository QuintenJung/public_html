@include('include.header')

<main>
    <form action="@yield('action')" method="post">
        @yield('content')
    </form>
</main>

@include('include.footer')