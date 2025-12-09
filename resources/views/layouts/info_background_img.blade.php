@include('include.header')

<main>
    <div>
        <img src="{{ asset('images/jongens-in-de-klas-768x542.jpg') }}" class="backgroundImg">
    </div>
    @yield('content')
</main>

@include('include.footer')