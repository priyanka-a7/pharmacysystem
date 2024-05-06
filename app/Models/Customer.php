<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Inventory;
 
class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'address', 'phone_number', 'medical_history'];

    public function items()
    {
        return $this->hasMany(Inventory::class);
    }
}
