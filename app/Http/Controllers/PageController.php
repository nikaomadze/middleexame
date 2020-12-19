<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sawyobi;
use Redirect;


class PageController extends Controller
{
    public function getSwayobi(){

    	return Sawyobi::all();
    }
}
