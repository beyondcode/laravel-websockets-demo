<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['message'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
