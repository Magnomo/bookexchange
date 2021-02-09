<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'messages';
    protected $fillable = ['sender_id','receiver_id','message','created_at'];

    public function remetente(){
        return $this->hasOne('App\Models\User', 'sendder_id');
    }
    public function destinatario(){
        return $this->hasOne('App\Models\User', 'receiver_id');
    }
}
