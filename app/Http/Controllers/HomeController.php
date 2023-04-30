<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\Post;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $team=Team::all();
        $latestNews = Post::latest()->take(3)->get();
        $services= Service::all();
        $categories=PortfolioCategory::all();
        $portfolios=Portfolio::all();
        return view('home',['team'=>$team,'latestNews'=>$latestNews, 'services'=>$services,'categories'=>$categories,'portfolios'=>$portfolios]);
    }
}
