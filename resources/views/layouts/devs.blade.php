@include('include.header')



<main>
    <div class="profileCardShell">
        <div id="react-root" class="profileCard"
            data-name="name"
            data-title="title" 
            data-handle="handle" 
            data-status="status"
            {{-- data-contact-text="Contact Me"  --}}
            data-avatar-url="{{ asset('images/dev.png') }}">
        </div>
        <div id="react-root" class="profileCard"
        data-name="name2"
        data-title="title" 
        data-handle="handle" 
        data-status="status"
        {{-- data-contact-text="Contact Me"  --}}
        data-avatar-url="{{ asset('images/dev.png') }}">
        </div>
        @vite(['resources/js/ProfileCardUse.jsx'])
    </div>
    
</main>

@include('include.footer')
