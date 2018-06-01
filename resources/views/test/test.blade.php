@extends('layout.layout')

@section('title')
    Park Cronesteyn
@endsection

@section('content')
    <section id="content" style="padding-top:25px; width: calc(100% - 250px);float: right">

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form method="post" action="{{url('test/register')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12"></div>
                <div class="form-group col-md-4">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="title">
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
