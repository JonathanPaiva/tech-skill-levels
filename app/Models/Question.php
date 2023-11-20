<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'question'
    ];

    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }
}
