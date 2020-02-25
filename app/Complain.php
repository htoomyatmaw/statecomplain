<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complain extends Model
{
    protected $fillable = [
        'title','description','user_id','township_id','blockvillage_id',
    ];
}
