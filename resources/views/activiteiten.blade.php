@extends('layout.layout')

@section('title')
    Park Cronesteyn
@endsection

@section('content')
    <section id="content">
        <div id="page wrapper">
            <div class="container">
                <section class="row">
                    <h2 class="col-md-12">Activiteiten in Polderpark Cronesteyn</h2>
                    <h5 class="col-md-12">Programma van 2018</h5>
                    <h6 class="col-md-12">Alle activiteiten starten bij de tuin van de smid, tenzij anders aangegeven.</h6>
                </section>
                <section class="row">
                    @if($activities->count())
                        @foreach($activities as $activity)
                            <h3 class="col-md-12">{{ $activity->title }}</h3>
                            <p class="col-md-12">{{ $activity->activity }}</p>
                            <small class="col-md-12">{{ $activity->date }}</small>
                        @endforeach
                    @endif
                </section>
            </div>
        </div>
    </section>
@endsection
