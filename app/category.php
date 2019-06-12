<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    /**
     * table name
     */
    public $table="categories";

    /**
     * relation table categories -> product
     * @return Void
     */
    protected function Product(){
        return $this->hasMany('products');
    }
}
