<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventary extends Model
{
    public $timestamps = false;
    protected $table = 'inventary';
    protected $fillable = [
        'section', 'position', 'state', 'product', 'pdrpid', 'serial', 'code', 'channel', 'observation'
    ];
    


}
