<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'item_id',
        'images', 
    ];

    function item(){
        return $this->belongsTo('App\Models\Item');
    }

    function user(){
        return $this->belongsTo('App\Models\User');
    }
}
