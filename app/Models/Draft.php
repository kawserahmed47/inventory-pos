<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Draft extends Model
{
    use HasFactory;
    public static $snakeAttributes = false;

    public function draftDetails(){
        return $this->hasMany(DraftDetails::class, "draft_id", "id");
    }


}
