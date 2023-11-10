<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    use HasFactory;
    
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
}
