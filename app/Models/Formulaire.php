<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formulaire extends Model
{
    //
    // Relation : Un formulaire appartient à une évaluation
    public function evaluation()
    {
        return $this->belongsTo(Evaluation::class);
    }
}
