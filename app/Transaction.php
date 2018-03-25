<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Seller;
use App\Product;

class Transaction extends Model
{
    protected $fillable = [
        'quantity',
        'seller_id',
        'product_id'
    ];

    public function seller() {
        return $this->belongsTo( Seller::class );
    }

    public function product() {
        return $this->belongsTo( Product::class );
    }
}
