<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviewclick extends Model
{
    use HasFactory;
    protected $fillable = [
        'review_id',
        'user_id',
    ];

    function review(){
        return $this->belongsTo('App\Models\Review');
    }

    function user(){
        return $this->belongsTo('App\Models\User');
    }
}
