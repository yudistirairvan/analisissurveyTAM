<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variabel extends Model
{
    protected $table = 'variabels';
    protected $fillable = ['kodevariabel','namavariabel'];
}
