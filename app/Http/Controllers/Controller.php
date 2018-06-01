<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {

        return view('index');

    }

    public function activiteiten() {

        return view('activiteiten');

    }

    public function parkvereniging() {

        return view('parkvereniging');

    }

    public function vogelwerkgroep() {

        return view('vogelwerkgroep');

    }

    public function fotos() {

        return view('fotos');

    }

    public function contact() {

        return view('contact');

    }
}

