<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\News;
use App\Models\Visitor;
use App\Helpers\UserSystemInfoHelper;


class GuestController extends Controller
{
    public function index()
    {
        $date = \Carbon\Carbon::today()->subDays(7);
        $popular_news = News::orderby('visitors', 'desc')->where('upload_date2', '>=', $date)->take(8)->get();
        $daily_news = News::orderby('id', 'desc')->take(5)->get();
        $rand_news = News::inRandomOrder()->take(10)->get();
        $worldnews = News::where('category_id', 1)->take(5)->get();
        $politics = News::where('category_id', 2)->take(5)->get();
        $technews = News::where('category_id', 7)->take(5)->get();
        return view('index', compact('daily_news', 'rand_news', 'popular_news', 'worldnews', 'politics', 'technews'));   
    }
    public function category($id)
    {
        $cat = Category::where('id', $id)->first();
        $cat_news = News::where('category_id', $id)->orderby('id', 'desc')->paginate(5);
        $rand_news = News::inRandomOrder()->take(10)->get();
        return view('category', compact('cat','cat_news', 'rand_news'));
    }
    public function post($id)
    {
        $getip = UserSystemInfoHelper::get_ip();
        $NewVisitor = new Visitor;
        $NewVisitor->ip = $getip;
        $NewVisitor->news_id = $id;
        $NewVisitor->save();
        $visitor_count = Visitor::where('news_id' , $id)->distinct('ip')->count();
        $news_visitors = News::findOrfail($id);
        $news_visitors->visitors = $visitor_count;
        $news_visitors->save();

        $single_post = News::where('id', $id)->first();
        $rand_news = News::inRandomOrder()->take(10)->get();
        return view('post', compact('single_post', 'rand_news'));
    }
    public function search(Request $request)
    {
        $search = $request->input('search');
        $searchh = News::where('title', 'LIKE', '%' . $search . '%')->get();
        $rand_news = News::inRandomOrder()->take(10)->get();
        return view('search', compact('searchh', 'rand_news'));
    }
}
