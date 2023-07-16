<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EIController extends Controller
{
    function index() {
        $title_header = 'Welcome, To Prince World';
        $content_header = 'Here Iam gonna share everything about my life. Books Iam reading, Games Iam Playing, Stories and Events';
        return view('myblog.index',compact('title_header','content_header'));
    }
}
