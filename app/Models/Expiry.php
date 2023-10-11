<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expiry extends Model
{
    public function products(){
        return $this->belongsTo(Product::class, 'product_id');
    }
    public $timestamps = false;
    protected $fillable =   [
        'product_id',
        'order_number',
        'expiry_date',
        'quantity'
    ];
}
