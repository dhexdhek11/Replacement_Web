<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Staff as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Staff extends Model
{
    protected $table = 'staff';

    public function user(){
        return $this->belongsTo(User::class);

    }



}

