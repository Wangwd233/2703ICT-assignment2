<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'rating',
        'review',
    ];

    function item(){
        return $this->belongsTo('App\Models\Item');
    }

    function user(){
        return $this->belongsTo('App\Models\User');
    }
}
