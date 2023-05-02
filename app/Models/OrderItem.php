<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['order_id', 'product_id'];

    public function order() {
        return $this->belongs(Order::class);
    }

    public function product() {
        return $this->belongs(Product::class);
    }
}
