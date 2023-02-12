<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductDescription extends Model
{
    use  SoftDeletes, HasFactory;

    protected $fillable = [
        'name',
        'number',
        'product_id',
    ];

    function product()
    {
        return $this->belongsTo(Product::class);
    }
}
