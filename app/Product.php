<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';
    
    /* orders table relation */
    public function orders(){
        return $this->hasMany(Order::class,'product_id');
    }

    /* transform product price with currency symbol */
    public function getPriceWithSymbolAttribute(){
        return "$ ".$this->product_price;
    }    
}
