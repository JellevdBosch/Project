@extends('layout.layout')

@section('title')
    Park Cronesteyn
@endsection

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <section class="content">
    <h3>Fotos van Polderpark Cronesteyn</h3>
        <div>
            <div class="row">
                <div class='list-group gallery' style="display:inline-block;margin-top:20px;">

                    @if($images->count())
                        @foreach($images as $image)
                            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                                <a class="thumbnail fancybox" rel="ligthbox" href="{{asset('/images/gallery/'. $image->image)}}">
                                    <img class="img-responsive" alt="{{ $image->title }}" src="{{asset('/images/gallery/'. $image->image)}}" />
                                    <div class='text-center'>
                                        <small class='text-muted'>{{ $image->title }}</small>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function(){
                $(".fancybox").fancybox({
                    openEffect: "none",
                    closeEffect: "none"
                });
            });
        </script>
    </section>
@endsection
