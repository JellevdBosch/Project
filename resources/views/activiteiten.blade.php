@extends('layout.layout')

@section('title')
    Park Cronesteyn
@endsection

@section('content')
    <section id="content">
        <div id="page">
                <section class="row">
                    <h2 class="col-md-12">Activiteiten in Polderpark Cronesteyn</h2>
                    <h5 class="col-md-12">Programma van 2018</h5>
                    <h6 class="col-md-12">Alle activiteiten starten bij de tuin van de smid, tenzij anders aangegeven.</h6>
                </section>
                <section class="row">
                    @if($activities->count())
                        @foreach($activities as $activity)
                            <article class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h3>{{ $activity->title }}</h3>
                                <p>{{ $activity->activity }}</p>
                                <small>{{ $activity->date }}</small>
                            </article>
                        @endforeach
                    @endif
                </section>
        </div>
    </section>
@endsection
