@include('include.header')

<main>
    <div>
        <img src="{{ asset('images/temp_background_img.webp') }}" class="backgroundImg">
    </div>
    @yield('content')
</main>

@include('include.footer')