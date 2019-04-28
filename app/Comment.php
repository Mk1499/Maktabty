<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    protected $fillable = ['body', 'user_id', 'book_id'];

    public function post()
    {
      return $this->belongsTo('App\Book');
    }
   
    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
