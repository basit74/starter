<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Transaction;
use App\Seller;

class Product extends Model
{
    const AVAILABLE_PRODUCT = 'available';
    
    const UNAVAILABLE_PRODUCT = 'unavailable';

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'status',
        'image',
        'seller_id'
    ];

    public function isAvailable() {
        return $this->status == self::AVAILABLE_PRODUCT;
    }

    public function categories() {
        $this->belongsToMany( Category::class );
    }

    public function transactions() {
        return $this->hasMany( Transaction::class );
    }

    public function seller() {
        return $this->belongsTo( Seller::class );
    }
}
