@extends('layout.layout')

@section('title')
    Edit | Activiteit
@endsection
<style>
    .wrapper {
        margin: auto !important;
        width: 100% !important;
    }
    .tabs li a {
        color: #5d963f;
    }
</style>
@section('content')
    @if(Session::has('success'))
        <div class="container">
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
            </div>
        </div>
    @endif
    <div style="margin-bottom: 120px;" class="container">
        <div class="col-lg-2 col-sm-12 col-xs-12 col-md-2">
            <nav class="nav-sidebar">
                <ul class="nav text-center tabs">
                    <li class="active">
                        <a href="{{ url('admin/image-gallery') }}">Afbeeldingen</a>
                    </li>
                    <li class=""><a href="{{ url('admin/activiteiten') }}">Activiteiten</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            <h3 style="margin-bottom: 30px">Activiteit Wijzigen</h3>
            <form action="{{ url('admin/edit/activiteit') }}" method="POST"
                  enctype="multipart/form-data">
                {!! csrf_field() !!}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="row">
                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <input style="display: none" type="hidden" name="id" hidden readonly="readonly">{{ $activities->id }}</input>
                        <label for="title">Titel:
                            <input autocomplete="off" value="{{ $activities->title }}" type="text" class="form-control" name="title">
                        </label>
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <label for="activity">Activiteit:
                            <textarea type="text" class="form-control" name="activity">
                                 {{$activities->activity}}
                            </textarea>
                        </label>
                    </div>
                    <div class="form-group col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <label for="date">Datum:
                            <input value="{{$activities->date}}" autocomplete="off" type="date" class="form-control" name="date">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12"></div>
                    <div class="form-group col-md-4" style="margin-top:10px">
                        <button type="submit" class="btn btn-success">Wijzig</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection