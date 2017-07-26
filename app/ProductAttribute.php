<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    public function attributevalues()
    {
    	return $this->hasMany('App\ProductAttributeValue');
    }

    public function product()
    {
    	return $this->belongsTo('App\Product');
    }
}
