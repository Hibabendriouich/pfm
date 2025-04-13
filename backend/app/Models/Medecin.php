<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medecin extends Model
{
    public function Rdvs(){
        return $this->hasMany(Rdv::class);
    }
}
