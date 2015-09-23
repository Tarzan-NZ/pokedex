<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Pokemon;
use App\Capture;

class PokecentreController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Find out how many registered trainers there are
        $totalTrainers = User::all()->count();

        return view('pokecentre.index', compact('totalTrainers'));
    }

    public function capture()
    {
        // $allPokemon = Pokemon::all();
        $allPokemon = \DB::table('pokemon')->orderBy('name')->get();

        return view('pokecentre.capture', compact('totalTrainers'));
    }

    public function postCapture(Request $request)
    {
        $this->validate($request, [
            'pokemon'=>'required|exists:pokemon,id',
            'photo'=>'required|image'
        ]);

        // Create a new instance of the capture model
        $capture = new Capture();

        $capture->photo = 'test.jpg';
        $capture->user_id = \Auth::user()->id;
        $capture->pokemon_id = $request->pokemon;

        $capture->save();

        // Find out the name of the pokemon the user just captured
        $pokemon = Pokemon::findOrFail($request->pokemon);

        return redirect('pokedex/'.$pokemon->name);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
