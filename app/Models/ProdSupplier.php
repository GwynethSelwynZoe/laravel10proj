<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSupplier extends Model
{
    protected $fillable = [
        'prod_supplier_id',
        'date_supplied',
        'prod_price',
        'prod_id',
        'supplier_id',
        // other fillable fields
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'prod_id');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id');
    }
}

