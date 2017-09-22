<?php

namespace Totolai\HelloWorld;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function index()
    {
        $message = 'Hello World';
        return view('HelloWorld::welcome', compact('message'));
    }
}
