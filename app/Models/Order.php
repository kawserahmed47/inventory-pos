<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public static $snakeAttributes = false;

    public function orderDetails(){
        return $this->hasMany(OrderDetails::class, "order_id", "id");
    }
}
