<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table='member';
    protected $fillable=['uname','username','password','email','sex','orderPaper','birthday','phone','Area','cityarea','cuszip','cusadr','date'];
}
