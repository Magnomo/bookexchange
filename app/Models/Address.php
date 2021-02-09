<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    public $timestamps= true;
    protected $table = "address";
    protected $fillable = ['street','city','district','state','coutry','number','cep','user_id'];
    
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
