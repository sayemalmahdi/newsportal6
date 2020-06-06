<?php

namespace App\Http\Controllers\Admin\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function AddNews(){

    	return view('admin.news.add_news',compact('news'));
    }
}
