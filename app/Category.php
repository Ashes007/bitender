<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','status'];

    public function parent()  
	{
	    return $this->belongsTo(self::class, 'parent_id');
	}

	public function children()  
	{
	    return $this->hasMany(self::class, 'parent_id');
	}
}
