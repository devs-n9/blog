<?php

namespace App\Http\Controllers\Dashboard;

use App\Posts;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

class DashboardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
//        Posts::update([
//            'title' => 'test2',
//            'content' => 'content test2'
//        ]);
        
        $posts = Posts::all();
        return view('dashboard.index', [
            'posts' => $posts,
            'item' => $post
        ]);
    }
    
    
    public function create()
    {
        
        return view('dashboard.posts.create');
    }
    
    public function insert(Request $request)
    {
        
        $data = $request->all();
        return "create POST";
        
    }
}
