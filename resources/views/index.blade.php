@extends('layout.layout')

@section('title')
    Park Cronesteyn
@endsection

@section('landing')
    <section id="landing">
        <section class="grid-landing">
            <div class="landing-item"><button type="button" class="btn btn-success">
                    Success
                </button>
            </div>
            <div class="landing-item image">
                <div class="image"></div>
                {{--<img src="https://www.wallpaperup.com/uploads/wallpapers/2014/05/23/356373/21df65eddd49cf3c8a46bc62c8149a53-1000.jpg">--}}
            </div>
        </section>
    </section>
@endsection

@section('content')
    @include('include.sidebar')
    <section id="content" style="padding-top:25px; width: calc(100% - 250px);float: right">
        dc
    </section>
@endsection
