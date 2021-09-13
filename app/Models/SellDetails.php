<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellDetails extends Model
{
    use HasFactory;
    public static $snakeAttributes = false;


    public function product(){
        return $this->belongsTo(Product::class, "product_id", "id");
    }
    public function productUnit(){
        return $this->belongsTo(ProductUnit::class, "product_unit_id", "id");
    }
    public function sell(){
        return $this->belongsTo(Sell::class, "sell_id", "id");
    }
}
