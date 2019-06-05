<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //add fillable properties for mass assignment
    protected $fillable=['title','body','category','image','user_id'];


    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }
}