@extends('layout.layout')

@section('title')
    Park Cronesteyn
@endsection

@section('content')
    <section id="content" style="padding-top:25px; width: calc(100% - 250px);float: right">

        @if(Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
                @php
                    Session::forget('success');
                @endphp
            </div>
        @endif

        <form method="post" action="{{url('/test')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12"></div>
                <div class="form-group col-md-4">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="title">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group col-md-4">
                    <label for="text">Text:</label>
                    <input type="text" class="form-control" name="text">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"></div>
                <div class="form-group col-md-4" style="margin-top:10px">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>

    </section>
@endsection
