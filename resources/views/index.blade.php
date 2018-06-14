@extends('layout.layout')

@section('title')
    Park Cronesteyn
@endsection

@section('landing')
    <section id="landing" class="landing-intro">
        <div class="landing-inner">
            <div class="landing-content">
                <button type="button" class="btn btn-success">Success</button>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section id="articles" class="articles-wrapper">
        <div class="inner">
            @foreach ($recentpost as $posts)
                <div class="content">
                    <h2>{{ $posts->title }}</h2>
                    <p>{{ $posts->text }}</p>
                </div>
            @endforeach
        </div>
    </section>
    @include('include.sidebar')
    <section id="content" style="padding-top:25px; width: calc(100% - 250px);float: right">
    </section>
@endsection

