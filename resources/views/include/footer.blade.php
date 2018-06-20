<footer id="footer">
    <section id="footer-wrapper">
        <div class="grid-container">
            <div class="grid-item left"><p><a href="tel:123-456-7890">Tel: 123-456-7890</a></p></div>
            <div class="grid-item center">
                <ul class="footer-list">
                    <li class="list-item"><p><a href="{!! action('Controller@index') !!}">Home</a></p></li>
                    <li class="list-item"><p><a href="{!! action('Controller@parkvereniging') !!}">Parkvereniging</a></p></li>
                    <li class="list-item"><p><a href="{!! action('Controller@vogelwerkgroep') !!}">Vogelwerkgroep</a></p></li>
                    <li class="list-item"><p><a href="{!! action('Controller@fotos') !!}">Foto's</a></p></li>

                    {{-- Zo kan een pagina ook worden opgevraagt --}}
                    {{-- <a href="{{ url('page') }}">Some Text</a> --}}

                </ul>
            </div>
            <div class="grid-item right"><p><a href="{!! action('Controller@activiteiten') !!}">Activiteiten</a></p></div>
        </div>
    </section>
    <section id="footer-bottom">
        <div id="footer-bottom-wrapper">
            <p><a href="mailto:polderparkcronesteyn@leiden.info" target="_top"><span style="color:#ffffff;">polderparkcronesteyn@leiden.info</span></a></p>
        </div>
    </section>

</footer>
