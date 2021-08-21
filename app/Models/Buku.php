<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = "bukus";

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
