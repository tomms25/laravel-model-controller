<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;


    // rappresento colonna per colonna tutte le variabili come si chiamano nel DB


    public $id;
    public $title;
    public $original_title;
    public $nationality;
    public $date;
    public $vote;

}
