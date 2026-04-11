<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['name', 'quantity', 'price', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
