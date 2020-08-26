<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    use Notifiable;
    //table name
    protected $table = 'posts';
    //primary key
    protected $primaryKey = 'id';

    protected $fillable = [
      'title', 'body', 'user_id'
    ];
}
