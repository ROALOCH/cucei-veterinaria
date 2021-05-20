<?php

namespace App\Http\Controllers;

use App\Models\Appointments;
use App\Models\Pet;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->user_type == 'admin') {
            $appointments = Appointments::with('pet', 'user')->get();
            return response()->view('appointments.appointmentIndex', ['appointments' => $appointments]);
        } else {
            $pets = Pet::byOwner(Auth::user()->id)->get();
            $appointments = Appointments::byUser(Auth::user()->id)->with('pet')->get();
            return response()->view('appointments.appointmentIndex', ['appointments' => $appointments, 'pets' => $pets]);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  response()->view('appointments.appointmentForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appointment = new Appointments($request->all());

        $appointment->save();
        return response()->redirectToRoute('Appointements.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function show(Appointments $appointments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointments $appointments)
    {
        /*
         * No c si se pueda utilizar la misma bista, kreo k no
         */
        return response()->view('appointments.appointmentForm');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointments $appointments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointments  $appointments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointments $appointments, $id)
    {
        $appointment = Appointments::findOrFail($id);
        $appointment->delete();
        return response()->redirectToRoute('Appointements.index');
    }
}
