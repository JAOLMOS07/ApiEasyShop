<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Message;
use App\Models\User;

class Chat extends Model
{
    use HasFactory;
    public function Messages(){
        return $this->hasMany(Message::class);
    }
    public function Users(){
        return $this->belongsToMany(User::class);
    }
}
