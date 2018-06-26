<!DOCTYPE html>
@extends('layout.layout')

@section('title')
    Admin | Activiteiten
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
        <div class="col-lg-2">
            <nav class="nav-sidebar">
                <ul class="nav tabs">
                    <li class="active">
                        <a href="{{ url('admin/image-gallery') }}">Afbeeldingen</a>
                    </li>
                    <li class=""><a href="{{ url('admin/activiteiten') }}">Activiteiten</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-lg-10">
            <h3>Activiteit toevoegen
                <span style="float:right">
                    <a style="color: #5d963f" href="{{ url('activiteiten') }}">Naar Activiteiten</a>
                </span>
            </h3>
            <form action="{{ url('admin/activiteiten') }}" class="form-image-upload" method="POST"
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
                    <div class="form-group col-md-4">
                        <label for="title">Titel:
                            <input autocomplete="off" type="text" class="form-control" name="title">
                        </label>
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-md-4">
                        <label for="activity">Activiteit:
                            <textarea type="text" class="form-control" name="activity"></textarea>
                        </label>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="date">Datum:
                            <input autocomplete="off" type="date" class="form-control" name="date">
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12"></div>
                    <div class="form-group col-md-4" style="margin-top:10px">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
            <div class="row">
                <h3 style="color: #5d963f">Delete Activities:</h3>
                <div class='list-group gallery'>
                    @if(!empty($activities) && $activities->count())
                        @foreach($activities as $activity)
                            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3' style="border: 0.5px solid #5d963f; padding: 10px">
                                <form action="{{ url('admin/activiteiten/',$activity->id) }}" method="POST">
                                    <input type="hidden" name="_method" value="delete">
                                    {!! csrf_field() !!}
                                    <button type="submit" style="background: none;" class="close-icon btn">
                                        <i style="color: #5d963f; font-size: 18px;" class="glyphicon glyphicon-remove"></i>
                                    </button>
                                </form>
                                <div class='text-center'>
                                    <small class='text-muted'>{{ $activity->title }}</small><br>
                                    <small class='text-muted'>{{ $activity->activity }}</small><br>
                                    <small class='text-muted'>{{ $activity->date }}</small><br>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection