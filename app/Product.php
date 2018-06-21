<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['imagePath','price','title','description','payment_status'];

    public function getPaidAttribute()
    {
        if ($this->payment_status == 'Invalid') {
            return false;
        }
        return true;
    }
}
