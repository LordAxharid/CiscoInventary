<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventary extends Model
{

    protected $table = 'inventary';
    protected $fillable = [
        'section', 'position', 'state', 'product', 'pdrpid', 'serial', 'code', 'channel', 'observation'
    ];
    


}
