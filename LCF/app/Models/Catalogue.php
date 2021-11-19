<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogue extends Model
{
    use HasFactory;

    public function inCatalogue()
    {
        return $this->hasMany('products');
    }


    protected $table = 'catalogue';
    protected $primaryKey = 'code';
}
