<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Storee extends Model
{
   
    use HasFactory;

    protected $filename = [
    	'id',
    	'store_name',
    	'store_location'
    ];
}
