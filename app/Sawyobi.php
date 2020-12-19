<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sawyobi extends Model
{
    use HasFactory;

    protected $filename = [
    	'id',
    	'store_name',
    	'store_location'
    ];

}
