<header id="header">
    <section id="header-wrapper">
        <div id="main-nav-dropdown">
                <ul id="nav-drop" class="nav navbar-nav">
                    <li id="dd-check" class="dropdown">
                        <a href="#" class="dropdown-toggle "><span onclick="toggleClass()" id="nav-span"  class=" glyphicon glyphicon-align-justify"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="{!! action('Controller@index') !!}"><div class="pull-left">Home</div><span class=" glyphicon glyphicon-home pull-right"></span></a></li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><a href="{!! action('Controller@activiteiten') !!}"><div class="pull-left">Activiteiten</div><span class=" glyphicon glyphicon-home pull-right"></span></a></li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><a href="{!! action('Controller@parkvereniging') !!}"><div class="pull-left">Parkvereniging</div><span class="glyphicon glyphicon-leaf pull-right"></span></a></li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><a href="{!! action('Controller@vogelwerkgroep') !!}"><div class="pull-left">Vogelwerkgroep</div><span class="glyphicon glyphicon-plane pull-right"></span></a></li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><a href="{!! action('Controller@fotos') !!}"><div class="pull-left">Foto's</div><span class="glyphicon glyphicon-picture pull-right"></span></a></li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><a href="{!! action('Controller@contact') !!}"><div class="pull-left">Contact</div><span class="glyphicon glyphicon-earphone pull-right"></span></a></li>
                        </ul>
                    </li>
                </ul>
        </div>
        <script>
            $('#dd-check').find('a').on('click', function (event) {
                var ddcheck = document.getElementById('dd-check');
                $(ddcheck).toggleClass('open');
            });
            function toggleClass() {
                var ddSpan = document.getElementById('nav-span');
                $(ddSpan).toggleClass("nav-span-open");
            }
        </script>
        <div id="main-logo">
            <img src="{{asset('images/logo.png')}}" alt="Polderpark Cronesteyn Logo">
        </div>
        <div id="main-nav">
            <nav id="main-nav-wrapper">
                <ul>
                    <li>
                        <a href="{!! action('Controller@index') !!}">Home</a>
                    </li>
                    <li>
                        <a href="{!! action('Controller@activiteiten') !!}">Activiteiten</a>
                    </li>
                    <li>
                        <a href="{!! action('Controller@parkvereniging') !!}">Parkvereniging</a>
                    </li>
                    <li>
                        <a href="{!! action('Controller@vogelwerkgroep') !!}">Vogelwerkgroep</a>
                    </li>
                    <li>
                        <a href="{!! action('Controller@fotos') !!}">Foto's</a>
                    </li>
                    <li>
                        <a href="{!! action('Controller@contact') !!}">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div id="login-info">
            <p>
                <b>Welkom Jelle</b>
            </p>
        </div>
    </section>
</header>
