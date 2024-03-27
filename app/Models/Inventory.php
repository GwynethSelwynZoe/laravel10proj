<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
        'inv_id', 
        'stock', 
        'prod_id'
    ];

    public function product(){
        return $this->BelongsTo(Product::Class);
    }
}

