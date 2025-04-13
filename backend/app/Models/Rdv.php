<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    public function cabinets()
    {
        return $this->belongsTo(Cabinet::class);
    }
    public function patients()
    {
        return $this->belongsTo(Patient::class);
    }
    public function medecins()
    {
        return $this->belongsTo(Medecin::class);
    }
}
