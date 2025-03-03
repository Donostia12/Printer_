<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_phone',
        'product_id',
        'quantity',
        'material',
        'design_file',
        'status',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
