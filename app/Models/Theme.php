<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Theme extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'name',
    ];
    
    public static function createRegister($themeRequest):void {

        Theme::create($themeRequest);
    }

    public static function getById($id) : Theme {

        return Theme::findOrFail($id);
    }

    public static function editRegister($themeRequest) : void {

        $theme = self::getById($themeRequest->id);

        $theme->update($themeRequest->all());
    }

    public static function deleteRegister($id) : void {

        $theme = self::getById($id);

        $theme->delete();
    }

    public function themeQuestions()
    {
        return $this->hasMany(Question::class);
    }
}
