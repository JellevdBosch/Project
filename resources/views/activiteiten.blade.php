@extends('layout.layout')

@section('title')
    Park Cronesteyn
@endsection

@section('content')
    <section id="content">
        <div id="page wrapper">
            @if($activities->count())
                @foreach($activities as $activity)
                    <h3>{{ $activity->title }}</h3>
                    <p>{{ $activity->activity }}</p>
                    <small>{{ $activity->date }}</small>
                @endforeach
            @endif
        </div>
    </section>
@endsection
