<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    public function attribute()
    {
    	return $this->belongsTo('App\Attribute');
    }
}
