<section id="content">

    <h3>Artikel toevoegen<span style="float:right"><a href="{{ url('activiteiten') }}">Naar activiteiten</a></span></h3>
    <form method="post" action="{{url('/admin')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="form-group col-md-4">
                <label for="title">Title:
                    <input autocomplete="off" type="text" class="form-control" name="title">
                </label>
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-group col-md-4">
                <label for="text">Text:
                    <input autocomplete="off" type="text" class="form-control" name="text">
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

</section>