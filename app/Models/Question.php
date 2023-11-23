<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'question',
        'theme_id',
        'level_id'
    ];

    public static function createRegister($questionRequest):void {

        Question::create($questionRequest);
    }

    public static function getById($id) : Question {

        return Question::findOrFail($id);
    }

    public static function editRegister($questionRequest) : void {

        $question = self::getById($questionRequest->id);

        $question->update($questionRequest->all());
    }

    public static function deleteRegister($id) : void {

        $question = self::getById($id);

        $question->delete();
    }

    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function questionAnwers()
    {
        return $this->hasMany(Anwer::class);
    }
}
