<!DOCTYPE html>
@extends('layout.layout')

@section('title')
    Admin | Activiteiten
@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<style>
    .wrapper {
        margin: auto !important;
        width: 100% !important;
    }
    .tabs li a {
        color: #5d963f;
    }
    .gallery {
        display: inline-block;
        margin-top: 20px;
    }

    .close-icon {
        border-radius: 50%;
        position: absolute;
        right: 5px;
        top: -10px;
        padding: 5px 8px;
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
    <h3>Afbeeldingen Gallerij <span style="float:right"><a style="color: #5d963f" href="{{ url('fotos') }}">Naar Foto's</a></span></h3>
    <form action="{{ url('admin/image-gallery') }}" class="form-image-upload" method="POST"
          enctype="multipart/form-data">

        {!! csrf_field() !!}

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> Er zijn problemen met je input.<br><br>
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
                    <input autocomplete="off" type="text" name="title" class="form-control" placeholder="Title">
                </label>
            </div>
            <div class="form-group col-md-4">
                <label for="image">Afbeelding:
                    <input autocomplete="off" type="file" name="image" class="form-control">
                </label>
            </div>
            <div class="col-md-12"></div>
            <div class="form-group col-md-4">
                <br/>
                <button type="submit" class="btn btn-success">Upload</button>
            </div>
        </div>

    </form>

    <div class="row">
        <div class='list-group gallery'>
            @if(!empty($images) && $images->count())
                @foreach($images as $image)
                    <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                        <a class="thumbnail fancybox" rel="ligthbox"
                           href="{{asset('/images/gallery/'. $image->image)}}">
                            <img class="img-responsive" alt="" src="{{asset('/images/gallery/'. $image->image)}}"/>
                            <div class='text-center'>
                                <small class='text-muted'>{{ $image->title }}</small>
                            </div>
                        </a>
                        <form action="{{ url('admin/image-gallery',$image->id) }}" method="POST">
                            <input type="hidden" name="_method" value="delete">
                            {!! csrf_field() !!}
                            <button type="submit" class="close-icon btn btn-danger"><i
                                        class="glyphicon glyphicon-remove"></i></button>
                        </form>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
<script type="text/javascript">
    $(document).ready(function () {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>
        </div>
    </div>
@endsection