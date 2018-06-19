@extends('layout.layout')

@section('title')
    Park Cronesteyn
@endsection

@section('content')
    <section id="content">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h3>Heeft u een vraag? <br>Neem contact met ons op.<br><br></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col-md-12" style="padding:0;">
                            <div class="form-group col-md-6">
                                <label for="name">Naam</label>
                                <input type="text" class="form-control" id="name" name="naam"
                                       placeholder="Naam" required="required"/>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">E-mailadres</label>
                                <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                            </span>
                                    <input type="email" class="form-control" name="email" id="email"
                                           placeholder="E-mailadres" required="required"/></div>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="form-group col-md-12" style="padding:0;">
                                <label for="name">Bericht</label>
                                <textarea name="message" id="message" class="form-control" name="bericht"
                                          rows="9" cols="25" required="required"
                                          placeholder="Bericht"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                Verzenden
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <form>
                    <legend><span class="glyphicon glyphicon-globe"></span> Informatie</legend>
                    <address>
                        <strong>Parkvereneging Cronesteyn</strong><br>
                        kanaalpark, Suite 600<br>
                        Leiden, CA 94107<br>
                        T: (123) 456-7890
                    </address>
                    <address>
                        <strong>Mail adres</strong><br>
                        <a href="mailto:#">polderparkcronesteyn@leiden.info</a>
                    </address>
                </form>
            </div>
        </div>
    </section>
@endsection
