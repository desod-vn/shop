<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    public $timestamp = false;

    public function getType()
    {
        return $this->belongsTo('App\Models\Type', 'id_types', 'id');
    }

}
