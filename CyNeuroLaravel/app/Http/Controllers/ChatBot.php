<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatBot extends Controller
{
    public function getResponse(Request $request) {
    	return "hello from VIMAN";
    }
}
