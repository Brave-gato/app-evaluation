<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    //
    // Relation : Une évaluation appartient à un module
    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    // Relation : Une évaluation a un formulaire associé
    public function formulaire()
    {
        return $this->hasOne(Formulaire::class);
    }

}
