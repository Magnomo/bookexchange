<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookImage extends Model
{
    use HasFactory;
    protected $table = "book_images";
    protected $fillable = ['book_id','url'];

    public function book(){
        return $this->belongsTo('App\Models\Book','book_id');
    }

}
