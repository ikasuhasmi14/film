<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Films;
use App\User;

class KategoriController extends Controller
{
	public function aksi()
	{
		$film = Films::where('kategori', '=', 'action')->get();
		// dd($film);

		return view('films.aksi', [
			'films' => $film
			]);

	}

	public function horror()
	{
		$film = Films::where('kategori', '=', 'horror')->get();
		// dd($film);

		return view('films.horror', [
			'films' => $film
			]);

	}

	public function komedi()
	{
		$film = Films::where('kategori', '=', 'comedy')->get();
		// dd($film);

		return view('films.komedi', [
			'films' => $film
			]);

	}


	public function romantis()
	{
		$film = Films::where('kategori', '=', 'romance')->get();
		// dd($film);

		return view('films.romantis', [
			'films' => $film
			]);

	}

	public function triler()
	{
		$film = Films::where('kategori', '=', 'thriller')->get();
		// dd($film);

		return view('films.triler', [
			'films' => $film
			]);

	}


	
}
