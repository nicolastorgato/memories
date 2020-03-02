<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memory extends Model
{
    protected $table = 'memories';

    public function user()
    {
        return $this->belongsTo(User::class);   // select * from user where project_id = 1
    }
}
