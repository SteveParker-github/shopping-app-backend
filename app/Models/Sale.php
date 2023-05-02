<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'sale_start', 'sale_end', 'sale_price'];

    public function product() {
        return $this->belongs(Product::class);
    }
}
