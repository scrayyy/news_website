<?php

namespace App\Http\Controllers;
use App\Models\News;

use Illuminate\Http\Request;

class AdminIndexController extends Controller
{
    public function __construct() 
    {
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderby('id', 'desc')->take(10)->get();
        return view('adminpanel.index', compact('news'));
    }
}