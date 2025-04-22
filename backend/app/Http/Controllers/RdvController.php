<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rdv;
use App\Enums\ServiceEnum;

class RdvController extends Controller
{
    public function store(Request $request)
{ 
    try {
        Rdv::create([
            'date' => $request->input('date'),
            'heure' => $request->input('heure'),
            'service' => ServiceEnum::from($request->input('service')),
            'nom' => $request->input('nom'),
            'telephone' => $request->input('telephone'),
            'cabinet_id' => 1,
        ]);

        return redirect()->back()->with('success', 'Votre rendez-vous a été pris avec succès.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Une erreur s\'est produite : ' . $e->getMessage());
    }
    
}}