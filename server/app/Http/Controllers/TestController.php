<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){
    	return response()->json([
    		"message" => "working"
    	], 200);
    }
}
