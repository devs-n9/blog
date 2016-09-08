<?php

namespace App\Http\Controllers\Dashboard;
use Validator;
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
        $posts = Posts::all();
        return view('dashboard.index', [
            'posts' => $posts
        ]);
    }
    
    
    public function create()
    {
        return view('dashboard.posts.create');
    }
    
    public function insert(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'unique:posts|required'
        ]);
        
        if (!$validator->fails()) {
            $data = $request->all();
            Posts::create($data);

            return redirect('/dashboard');
        }else{
            
            return view('dashboard.posts.create', [
                'errors' => $validator->errors()->all()
            ]);
        }
        
    }
    
    public function edit($id)
    {
        $post = Posts::find($id);
        return view('dashboard.posts.edit', [
            'post' => $post
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $post = Posts::find($id);
        $post->update($data);
        return redirect('/dashboard');
    }
    
    public function delete($title)
    {
        $post = Posts::where('title', $title)->delete();
        return redirect('/dashboard');
    }
}
