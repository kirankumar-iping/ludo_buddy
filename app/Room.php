<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $primaryKey = "id";
    public $table = "tbl_rooms";
    
    protected $fillable = [
        'room_code','user_id','is_active'
    ];
}
