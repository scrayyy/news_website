<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;


class AdminNewsController extends Controller
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
        $news = News::orderby('id', 'desc')->paginate(8);
        return view('adminpanel.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::orderBy('name' , 'ASC')->get();
        return view('adminpanel.news.create' , compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new = new News;
        $new->title = $request->title;
        $new->desc_ka = $request->desc;
        $new->upload_date = Date('d.F.Y');
        $new->upload_date2 = Date('Y:m:d');
        $new->category_id = $request->category;
        $new->save();
        $this->storeImage($new);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news_info = News::where('id' , $id)->first();
        $cats = Category::orderBy('name' , 'ASC')->get();
        return view('adminpanel.news.edit' , compact('news_info', 'cats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news_update = News::findOrfail($id);
        $news_update->title = $request->title;
        $news_update->desc_ka = $request->desc;
        $news_update->category_id = $request->category;
        $news_update->save();
        $this->storeImage($news_update);
        return redirect()->back();    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $News)
    {
        $News->delete();
        return redirect()->back();
    }
    public function storeImage($createdObject)
    {
        if(request()->has('image'))
        {
            $createdObject->update([
                'image' => request()->image->store('news', 'public'),  //ეს user_image არის ის სვეტი რომელიც ბაზაშიმაქ
            ]);
        }

        //composer require intervention/image
        //php artisan storage:link
    }
}
