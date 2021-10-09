<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;
    protected $fillable = [
        'reviewer_id',
        'follower_id',
    ];

    function user(){
        return $this->belongsTo('App\Models\User');
    }
}
