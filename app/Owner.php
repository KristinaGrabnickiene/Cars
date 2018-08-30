<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Car;


class Owner extends Model
{
    protected $table = "owners";

    public function cars()

    {
    
     return $this->hasOne('App\Car', 'owner_id', 'id');
    
    }
}
