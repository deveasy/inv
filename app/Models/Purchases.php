<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchases extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'suppliers_id', 'purchase_date', 'status', 'amount'];
    
    public function customer()
    {
        return $this->belongsTo(Suppliers::class);
    }
}
