<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

<style type="text/css">
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

    .form-image-upload {
        background: #e8e8e8 none repeat scroll 0 0;
        padding: 15px;
    }
</style>

<div class="container">

    <h3>Image Gallery <span style="float:right"><a href="{{ url('fotos') }}">Naar fotos</a></span></h3>
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
            <div class="col-md-5">
                <strong>Title:</strong>
                <input autocomplete="off" type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="col-md-5">
                <strong>Image:</strong>
                <input autocomplete="off" type="file" name="image" class="form-control">
            </div>
            <div class="col-md-2">
                <br/>
                <button type="submit" class="btn btn-success">Upload</button>
            </div>
        </div>

    </form>

    <div class="row">
        <div class='list-group gallery'>

            @if($images->count())
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
</div>

<script type="text/javascript">
    $(document).ready(function () {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>
