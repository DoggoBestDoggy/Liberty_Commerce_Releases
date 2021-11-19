<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    use HasFactory;

    public function Achat_cata()
    {
        return $this->belongTo('catalogue');
    }
    public function Achat_user()
    {
        return $this->belongTo('users');
    }

    protected $table = 'achat';
}
