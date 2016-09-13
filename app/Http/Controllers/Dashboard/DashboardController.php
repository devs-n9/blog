<?php

namespace App\Http\Controllers\Dashboard;
use Validator;
use App\Posts;
use App\Categories;
use App\Postcategories;
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
        $categories = Categories::all();
        return view('dashboard.posts.create', [
            'categories' => $categories
        ]);
    }
    
    public function insert(Request $request)
    {
        $categories = [];
        $category = [];
        $validator = Validator::make($request->all(), [
            'title' => 'unique:posts|required'
        ]);
        
        
        
        if (!$validator->fails()) {
            $data = $request->all();
            
            $categories = $data['categories'];
            
            unset($data['categories']);
            
            $post = Posts::create($data);
            
            foreach($categories as $k => $cat){
                $category[$k]['category_id'] = $cat;
                $category[$k]['post_id'] = $post->id;
            }
            
            Postcategories::insert($category);
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
        $categories = Categories::all();
        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => $categories
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
