<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
    //
    public function scopeGetlist($query,$val)
    {
        return $query->where('id',$val); // TODO: Change the autogenerated stub
    }
}
