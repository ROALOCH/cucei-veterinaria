<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->user_type == 'admin') {
            $pets = Pet::with('user')->get();
            //dd($pets);
        } else {
            $pets = Pet::byOwner(Auth::user()->id)->get();
        }
        return response()->view('pets.petIndex', ['pets' => $pets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('pets.petForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pet = new Pet($request->all());
        $pet->saveOrFail();
        return response()->redirectToRoute('Pet.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function show(Pet $pet, $id)
    {
        $pet = Pet::findOrFail($id);
        return response()->view('pets.petShow', ['pet' => $pet]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function edit(Pet $pet, $id)
    {
        $pet = Pet::findOrFail($id);
        return response()->view('pets.petForm', ['pet' => $pet]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pet $pet)
    {
        $pet = Pet::findOrFail($request->id);
        $pet->fill($request->all());
        $pet->save();
        return response()->redirectToRoute('Pet.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pet  $pet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pet $pet, $id)
    {
        $pet = Pet::findOrFail($id);
        $pet->delete();

        return response()->redirectToRoute('Pet.index');
    }
}
