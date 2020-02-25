<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlockVillage extends Model
{
    protected $fillable = [
        'name','township_id','complainplace_id',
    ];
}
