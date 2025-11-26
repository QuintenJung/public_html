@include('include.header')



<main>
    <div class="profileCardShell">

        @foreach($devs as $dev)
            <div id="react-root" class="profileCard" 
            data-name="{{ $dev['name'] }}" 
            data-title="{{ $dev['title'] }}" 
            data-handle="{{ $dev['handle'] }}" 
            data-status="{{ $dev['status'] }}"
            data-show-user-info="{{ $dev['userInfo'] }}"
            {{-- data-contact-text="Contact Me"  --}} 
            data-avatar-url="{{ asset('images/'. $dev['avatar'] .'.png') }}">
        </div>
        @endforeach

            

        @vite(['resources/js/ProfileCardUse.jsx'])
    </div>

</main>

@include('include.footer')
