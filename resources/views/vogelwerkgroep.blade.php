@extends('layout.layout')

@section('title')
    Vogelwerkgroep
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="col-md-4">
                <h2>@yield('title')</h2>
                <p>
                    In maart zagen we nog wel wat grutto's in de weilanden, maar intussen vragen we ons af of er
                    überhaupt zijn
                    gebleven om te broeden. Kieviten en scholeksters zien we gelukkig nog wel, al is het dan nog steeds
                    de vraag
                    of ze erin slagen kuikens groot te brengen onder de huidige slechte omstandigheden in Cronesteyn.

                    De boomklever die in maart nog in het park rondhing, is sindsdien ook niet meer gesignaleerd.
                    Het zou ook de eerste boomklever zijn geweest die bij ons kwam broeden.
                    Met de ijsvogels ging het de laatste jaren lekker in Cronesteyn, maar dit jaar lijkt het erop dat ze
                    het
                    hebben afgelegd tegen de herhaalde vorstperiodes.
                </p>
            </div>
            <div class="col-md-3">
                <h3>Vogels</h3>
                <img src="{{asset('/images/vogelfoto.jpeg')}}" alt="Foto van vogel" width="250px" height="200px">
                <i> Information: <b> Vogel Bird</b></i><br>
                <u> Shot date: 04-04-2018</u>
            </div>
            <div>
            </div>
        </div>
    </section>

@endsection

