@extends('layout.layout')

@section('title')
    Park Cronesteyn
@endsection

@section('landing')
    <section id="landing" class="landing-intro">
        <div class="landing-inner">
            <div class="landing-content">
                <h1>Polderpark Cronesteyn </h1>
                <button type="button" class="btn btn-success">Success</button>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section id="articles" class="articles-wrapper">
        <div class="inner">
            <div class="intro">
                <h2>Welkom in Polderpark Cronesteyn</h2>
                <img class="image" src="{{asset('/images/wilde-eend.jpg')}}" alt="Wilde eend">
                <p>Polderpark Cronesteyn ligt in de Kleine Cronesteynse polder, ook wel Knotterpolder genoemd. De polder
                    ligt tussen de A4, de spoorlijn naar Alphen aan de Rijn, het Rijn-Schiekanaal en de N 206. De
                    grootte is ca. 90 ha.
                    <br><br>
                    In 1975 kwam Cronesteyn in handen van de gemeente Leiden. In 1982 werd het polderpark gerealiseerd
                    naar het ontwerp van Evert Cornet. Het park is geworden tot ontmoetingsplek, rustpunt, historisch
                    monument en speciaal biotoop.
                    <br><br>
                    In het park zijn wandel- en fietspaden aangelegd, op de fietspaden is ook goed te skaten. Daarnaast
                    zijn er o.a. een moerastuin, een waterspeelplaats, een landgoedbos en een camping te vinden. Ook is
                    er een bos waar ieder jaar reigers broeden.
                    <br><br>
                    In het park is het theehuis De tuin van de smid (voorheen bezoekerscentrum 'Het Reigersbos') te
                    vinden. Het theehuis is iedere dag geopend.
                    <br><br>
                    Een aantal organisaties is op een educatieve of recreatieve manier actief in het park. Op de pagina
                    'contact' vindt u de links naar hun websites.</p>
            </div>
            <div class="news">
                <h2>Laatste nieuws</h2>
                @foreach ($recentpost as $posts)
                    <div class="content">
                        <h3>{{ $posts->title }}</h3>
                        <p>{{ $posts->text }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @include('include.sidebar')
    <section id="content" style="padding-top:25px; width: calc(100% - 250px);float: right">
    </section>
@endsection

