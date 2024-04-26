<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'location_id', 'location_name', 'status'];
    
    public function customer()
    {
        return $this->belongsTo(Customers::class);
    }
}
