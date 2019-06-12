<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    /**
     * table name
     */
    public $table="clients";

    /**
     * relation table cleints -> orders
     * @return Void
     */
    protected function Orders(){
        return $this->hasMany('orders');
    }
}
