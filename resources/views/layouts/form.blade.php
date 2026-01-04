@include('include.header')

@yield('background')

<main>
    <div class="formMain">
        <div id="errors">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        @endif
        </div>
        @yield('content')
    </div>
</main>

<script>
    let errors = document.getElementById("errors")
    document.getElementsByTagName('form')[0].appendChild(errors)
    // x = document.getElementsByTagName('form')[0].childElementCount
    errors.style.order = 2
</script>

@include('include.footer')
