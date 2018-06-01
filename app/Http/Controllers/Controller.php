<?php

namespace App\Http\Controllers;
use App\Vogelwerkgroep;
use Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {

        return view('index');

    }

    public function activiteiten()
    {

        return view('activiteiten');

    }

    public function parkvereniging()
    {

        return view('parkvereniging');

    }

    public function vogelwerkgroep()
    {

        return view('vogelwerkgroep');

    }

    public function fotos()
    {

        return view('fotos');

    }

    public function contact()
    {

        return view('contact');

    }

    public function test()
    {
        return view('test/test');
    }

    public function create()
    {
        $user = new Vogelwerkgroep;

        $user->title = Request::get('title');
        $user->text = Request::get('text');
        $user->save();

//        Session::flash('message', "Special message goes here");
//        return Redirect::back();

        return view('test/test');
    }
}

