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
    $validated = $request->validate([
        'date' => 'required|date',
        'heure' => 'required|date_format:H:i',
        'service' => ['required', 'in:' . implode(',', array_map(fn($case) => $case->value, ServiceEnum::cases()))],
        'nom' => 'required|string|max:255',
        'telephone' => 'required|string|max:15',
    ]);

    $cabinet_id = auth()->user()->cabinet_id;
    \Log::info($validated);

    try {
        Rdv::create([
            
            'date' => $validated['date'],
            'heure' => $validated['heure'],
            'service' => $validated['service'],
            'nom' => $validated['nom'],
            'telephone' => $validated['telephone'],
            'cabinet_id' => $cabinet_id,
            
        ]);
        return redirect()->back()->with('success', 'Votre rendez-vous a été pris avec succès.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Une erreur s\'est produite lors de l\'enregistrement.');
    }
    
}}