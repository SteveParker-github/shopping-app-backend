<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id'];

    public function customer() {
        return $this->belongs(Customer::class);
    }

    public function orderItem() {
        return $this->hasMany(OrderItem::class);
    }
}
