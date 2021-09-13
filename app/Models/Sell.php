<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
    use HasFactory;
    public static $snakeAttributes = false;

    public function sellDetails(){
        return $this->hasMany(SellDetails::class, "sell_id", "id");
    }
}
