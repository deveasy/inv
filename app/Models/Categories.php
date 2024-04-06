<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'customer_id', 'order_date', 'status'];
    
    public function customer()
    {
        return $this->belongsTo(Customers::class);
    }
}
