<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Level extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'name',
    ];

    public static function createRegister($levelRequest):void {

        $contact = Level::create($levelRequest);
    }

    public static function getById($id) : Level {

        $level = Level::findOrFail($id);

        return $level;
    }

    public static function editRegister($levelRequest) : void {

        $level = self::getById($levelRequest->id);

        $level->update($levelRequest->all());
    }

    public static function deleteRegister($id) : void {

        $level = self::getById($id);

        $level->delete();
    }

    public function levelQuestions()
    {
        return $this->hasMany(Question::class);
    }

}
