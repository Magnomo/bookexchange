<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = "books";
    protected $fillable = ['title','description','author','user_id'];
    public $timestamps = true;

    public function images(){
        return $this->hasMany('App\Model\BookImage');
    }
    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    public function categorys(){
        return $this->belongsToMany('App\Models\Category','books_categorys', 'book_id','category_id');
    }

}
