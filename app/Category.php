<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category_name'];

    protected $table = 'categories';

    public function subCategory()
    {
    	return $this->hasMany('App\Subcategory', 'category_id');
    }
}
