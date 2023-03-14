<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharacterRequest;
use App\Models\CharacterModel;
use App\Models\HouseModel;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = CharacterModel::all();
        return view("characters.index",[
            "characters" => $characters,
            "title" => "HP karakterek",
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $houses = HouseModel::all();
        return view("characters.show", [
            "character" => $houses,
            "title" => "új karakter",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request\StoreCharacterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCharacterRequest $request)
    {
        $character = $request->validate();
        return redirect("characters.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $character = CharacterModel::FindOrFail($id);
        return view("characters.show", [
            "character" => $character,
            "title" => "{$character->house->name}-{$character->name} karakter",
        ]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $character = CharacterModel::FindOrFail($id);
        return redirect("characters.index");
    }
}
