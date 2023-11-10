<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anwer extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'anwer',
        'correct',
        'questionID'
    ];
}
