<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accueil extends Model
{
    use HasFactory;

     protected $fillable = ['nom', 'prenom', 'telephone', 'email', 'message'];
}
