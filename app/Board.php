<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{   
    protected $table='board';
    protected $fillable=['board_title','board_name','board_pic','board_email','board_content','board_ip','board_r_id'];
}
