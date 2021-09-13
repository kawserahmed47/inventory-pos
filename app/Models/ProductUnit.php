<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProductUnit extends Model
{
    use HasFactory;
    public static $snakeAttributes = false;

    protected $fillable = [
        'name', 'slug'
    ];


    protected static function boot()
    {
        parent::boot();
  
        static::created(function ($brand) {
            $brand->slug = $brand->createSlug($brand->name);
            $brand->save();
        });
    }

    private function createSlug($name){
        if (static::whereSlug($slug = Str::slug($name))->exists()) {
            $max = static::whereName($name)->latest('id')->skip(1)->value('slug');
  
            if (is_numeric($max[-1])) {
                return preg_replace_callback('/(\d+)$/', function ($matches) {
                    return $matches[1] + 1;
                }, $max);
            }
  
            return "{$slug}-2";
        }
  
        return $slug;
    }


    public function product(){
        return $this->belongsTo(Product::class, "product_id", "id");
    }

    public function supplier(){
        return $this->belongsTo(Supplier::class, "supplier_id", "id");
    }
}
