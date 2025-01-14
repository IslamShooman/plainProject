<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ["name", "userId", "content"];

    public function comments(){
        return $this->hasMany("App/Models/Comment");
    }
}
