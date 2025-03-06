<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    //
    // Relation : Un module a plusieurs évaluations
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }
}
