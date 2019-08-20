<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    


    public function maids()
    {
        return $this->hasMany('App\Maid');
    }


}
