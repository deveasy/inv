<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;

    protected $fillable = ['category_name', 'category_description', 'parent_category'];

    // Disable automatic timestamps
    public $timestamps = false;
    
    public function customer()
    {
        return $this->belongsTo(Customers::class);
    }
}
