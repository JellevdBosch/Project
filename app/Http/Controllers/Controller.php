<?php

namespace App\Http\Controllers;

use App\ImageGallery;
use App\Vogelwerkgroep;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class Controller extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public function index()
	{
		$recentpost = DB::table('vogelwerkgroep')
			->orderBy('created_at', 'desc')
			->limit(5)
			->get();

		return view('index', ['recentpost' => $recentpost]);

	}

	public function activiteiten()
	{
        $activities = DB::table('activities')
            ->orderBy('created_at', 'desc')
            ->get();
		return view('activiteiten', ['activities' => $activities]);
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

		$images = ImageGallery::get();
		return view('fotos', compact('images'));

	}

	public function contact()
	{

		return view('contact');

	}

	public function createArtikel()
	{
		$artikel = new Vogelwerkgroep;

		$artikel->title = Request::get('title');
		$artikel->text = Request::get('text');
		$artikel->save();

		return back()->with('success', 'Artikel is toegevoegd');
	}

	public function admin()
	{
		$images = ImageGallery::get();
		return view('admin/admin', compact('images'));
	}

}
