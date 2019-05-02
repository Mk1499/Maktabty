<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    protected $fillable = [
        'book_name', 'book_image', 'author', 'category_id','description', 'rate', 'copies_num'
    ];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function user(){
        return $this->belongsTo('App/User') ; 
    }
}
