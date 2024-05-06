<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = ['item_name', 'description', 'quantity', 'price', 'expiry_date', 'manufacturer'];

    // Define the relationship with Customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}

