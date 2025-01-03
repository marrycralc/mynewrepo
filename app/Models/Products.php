<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{

    protected $table='products';  
    protected $fillable = ['prodcut_name', 'descrioption', 'price', 'stock_quantity'];

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }

}
