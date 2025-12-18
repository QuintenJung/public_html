<footer>
    <button class="btn btn-circle" onclick="my_modal_3.showModal()"><img src="{{ asset('images/bugReportButton.png') }}" alt="bug"></button>
<dialog id="my_modal_3" class="modal">
  <div class="modal-box">
    <form method="dialog">
      <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
    </form>
    <h3 class="text-lg font-bold">heb je een bug gevonden?</h3>
    <a href="bug/create">go to bug report</a>
</dialog>
    <div>
        <div style="background-image: url('{{ asset('images/home.png') }}');">
            <p>
            <h4>Adres</h4>
            Oranje Nassau College Parkdreef<br>
            mavo havo vwo technasium<br>
            Parkdreef 282<br>
            2724 EZ Zoetermeer<br>
            079-341 10 41<br>
            <a href="mailto:info@orangequest.org">info@orangequest.org</a><br>
            </p>
        </div>
    </div>
    <div>
        <div style="background-image: url('{{ asset('images/info.png') }}');">
            <p>
            <h4>Snel naar *info tabs*</h4>
            <a href="/">Home page</a> <br>
            <a <?= active("info") ?> href="/info">Wat is Orange Quest?</a>
            </p>
        </div>
    </div>
    <div>
        <div style="background-image: url('{{ asset('images/dev.png') }}');">
            <p>
            <h4>devs</h4>
            Tiemo Verbove<br>
            Jasper Bruijn<br>
            Quinten Jungschlager<br>
            Timo sleeuwenhoek<br>
            </p>
        </div>
    </div>
    <div>
        <div style="background-image: url('{{ asset('images/phone.png') }}');">
            <p>
            <h4>Volg ons op</h4>
            <h4>ONC parkdreef:</h4>
            <div class="logo">
                
            <a href="https://www.facebook.com/ONCParkdreef/"><img class="socialeLogo" src="{{ asset('images/facebookLogo.png') }}" alt="facebook"></a>
            <a href="https://www.instagram.com/oncparkdreef/"><img class="socialeLogoInsta" src="{{ asset('images/instagramLogo.png') }}" alt="intagram"></a>
            <a href="https://www.linkedin.com/company/onc-parkdreef"><img class="socialeLogo" src="{{ asset('images/linkedinLogo.png') }}" alt="linkedin"></a>
            <a href="https://www.youtube.com/user/OranjeNassauColPD"><img class="socialeLogo" src="{{ asset('images/youtubeLogo.png') }}" alt="youtube"></a>
            </div>
            {{-- <h4>OrangeQuest:</h4> --}}
            </p>
        </div>
    </div>
</footer>
<script>
    function lavaLampLama() {
        window.location.href = "/controlRoom"
    }
</script>
</body>

</html>
