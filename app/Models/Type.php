<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = "types";
    public $timestamp = false;


    public function getProduct()
    {
        return $this->hasMany('App\Models\Product', 'id_types', 'id');
    }

}
