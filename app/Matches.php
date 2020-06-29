<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    protected $primaryKey = "id";
    public $table = "tbl_matches";
    
    protected $fillable = [
        'user_id','player_id','amt','room_code','match_status','winning_status','play_status','image'
    ];
}
