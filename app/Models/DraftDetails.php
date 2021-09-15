<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DraftDetails extends Model
{
    use HasFactory;
    public static $snakeAttributes = false;

    public function draft(){
        return $this->belongsTo(Draft::class, "draft_id", "id");
    }

    public function product(){
        return $this->belongsTo(Product::class, "product_id", "id");
    }

    
    public function productUnit(){
        return $this->belongsTo(ProductUnit::class, "product_unit_id", "id");
    }

}
