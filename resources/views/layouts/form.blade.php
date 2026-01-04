@include('include.header')

@yield('background')

<main>
    <div class="formMain">
        <div>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        @endif
        </div>
        @yield('content')
    </div>
</main>


@include('include.footer')
