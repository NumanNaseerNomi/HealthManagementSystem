<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessagesModel extends Model
{
    use HasFactory;
    protected $table = "Messages";

    function user()
    {
        return $this->hasOne(User::class, 'id', 'to');
    }
}
