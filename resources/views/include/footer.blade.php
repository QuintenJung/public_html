<footer>
    <button class="btn" onclick="my_modal_3.showModal()">open modal</button>
<dialog id="my_modal_3" class="modal">
  <div class="modal-box">
    <form method="dialog">
      <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
    </form>
    <h3 class="text-lg font-bold">Hello!</h3>
    <p class="py-4">Press ESC key or click on ✕ button to close</p>
  </div>
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
            </p>
        </div>
    </div>
    <div>
        <div style="background-image: url('{{ asset('images/dev.png') }}');">
            <p>
            <h4>devs *links naar dev paginas*</h4>
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
            <h4>Volg ons op *link naar media*</h4>
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
