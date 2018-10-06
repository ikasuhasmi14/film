<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Films;
		

class FilmController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index(Request $request)
	{
		$ab = $request->user()->id;
		$film = Films::where('user_id', '=', $ab)->get();
		
		return view('films.home', [
			'films' => $film
			]);
	}

	public function store(Request $request)
	{
		$this->validate($request, [
			'film_name' => 'required'
			]);

		$film = new Films();
		$film->film_name = $request->input('film_name');
		$film->user_id = $request->user()->id;
		$film->kategori = $request->input('kategori');
		
		$film->save();

		return redirect('/films');


	}

	public function edit($id)
	{
		$films = Films::find($id);

		return view('films.edit', [
			'films' => $films
			]);
	}

	public function update(Request $request, $id)
	{
		$this->validate($request, [
			'name' => 'required'
			]);

		$film = Films::find($id);	
		$film->film_name = $request->input('film_name');
		$film->kategori = $request->input('kategori');
		$film->save();

		return redirect('/films') ;
	}


	public function destroy(Request $request, Films $films)
	{
		
		$films->delete();
		return redirect('/films');
	}

	
}
