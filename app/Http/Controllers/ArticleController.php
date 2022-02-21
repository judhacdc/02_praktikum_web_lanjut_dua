<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        echo "Ini adalah page dengan ID " . $request->id;
    }
}
