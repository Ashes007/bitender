<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttributeValue extends Model
{
    public function attributes()
    {
    	return $this->belongsTo('App\ProductAttribute');
    }

    public function attributesname()
    {
    	return $this->belongsTo('App\Attribute','attribute_id');
    }

    public function attributevalue()
    {
    	return $this->belongsTo('App\AttributeValue','attribute_value_id');
    }
}
