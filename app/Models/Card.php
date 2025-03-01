<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
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
