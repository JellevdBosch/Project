<header id="header">
    <section id="header-wrapper">
        <div id="main-nav-dropdown">

                <ul id="nav-drop" class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown"><span class=" glyphicon glyphicon-align-justify"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{!! action('Controller@index') !!}">Home<span class=" glyphicon glyphicon-home pull-right"></span></a></li>
                            <li class="divider"></li>
                            <li><a href="{!! action('Controller@activiteiten') !!}">Activiteiten<span class="glyphicon glyphicon-text-color pull-right"></span></a></li>
                            <li class="divider"></li>
                            <li><a href="{!! action('Controller@parkvereniging') !!}">Parkvereniging<span class="glyphicon glyphicon-plane  pull-right"></span></a></li>
                            <li class="divider"></li>
                            <li><a href="{!! action('Controller@vogelwerkgroep') !!}">Vogelwerkgroep<span class="glyphicon glyphicon-leaf pull-right"></span></a></li>
                            <li class="divider"></li>
                            <li><a href="{!! action('Controller@fotos') !!}">Foto's<span class="glyphicon glyphicon-picture pull-right"></span></a></li>
                            <li class="divider"></li>
                            <li><a href="{!! action('Controller@contact') !!}">Contact<span class=" glyphicon glyphicon-earphone pull-right"></span></a></li>
                        </ul>
                    </li>
                </ul>

        </div>

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
