<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'prod_id', 
        'prodname',
        'prod_desc',
        'type',
        'price',
        'path_img'
    ];

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function inventory()
    {
        return $this->hasMany(Inventory::class);
    }
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function suppliers()
    {
        return $this->hasMany(ProductSupplier::class, 'prod_id');
    }

}
