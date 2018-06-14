@extends('layout.layout')

@section('title')
    Park Cronesteyn
@endsection

@section('content')
    <section id="content" style="padding-top:25px; width: calc(100% - 250px);float: right">
        <div class="jumbotron jumbotron-sm" style="background-color:#54c62b;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <h1 class="h1" style="color:white;">
                            Heeft u een vraag? <br><small style="color:white;">Dan kunt u dit formulier invullen :)</small></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="well well-sm">
                        <form action="" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Naam</label>
                                        <input type="text" class="form-control" id="name" name="naam" placeholder="Enter name" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">
                                            Email adres</label>
                                        <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required="required" /></div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Uw bericht/vraag</label>
                                        <textarea name="message" id="message" class="form-control"name="bericht" rows="9" cols="25" required="required"
                                                  placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                        Verzenden</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <form>
                        <legend><span class="glyphicon glyphicon-globe"></span> Onze informatie</legend>
                        <address>
                            <strong>Parkvereneging Cronesteyn, Inc.</strong><br>
                            kanaalpark, Suite 600<br>
                            Leiden, CA 94107<br>
                            <abbr title="Phone">
                                P:</abbr>
                            (123) 456-7890
                        </address>
                        <address>
                            <strong>Onze Mail</strong><br>
                            <a href="mailto:#">first.last@example.com</a>
                        </address>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
