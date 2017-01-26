<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if ($request->type == 'p') {
            $this->storePost($request);
            return redirect('dashboard')->with('status', 'Post saved successfully!');
       }

       elseif ($request->type == 'c') {
            $this->storeComment($request);
            return redirect()->action('PostController@show', ['id' => $request->id])->with('status', 'Comment saved successfully!');
       }      
    }

    public function storePost(Request $request) {

        // Validate the data
        $this->validate($request, [
            'user' => 'required|max:255',
            'location' => 'required|max:255',
            'type' => 'required|max:1',
            'title' => 'required|max:255',
            'message' => 'required|min:5',
           
        ]);

        // Save the request data if validation passes        
        Post::create([
            'user' => $request->user,
            'location' => $request->location,
            'type' => $request->type,
            'post_title' => $request->title,
            'content' => $request->message,
            'post_id' => uniqid($request->type, true),
        ]); 

        

    }

    public function storeComment(Request $request) {
        // Validate the data
        $this->validate($request, [
            'user' => 'required|max:255',
            'type' => 'required|max:1',
            'post_id' => 'required|max:255',
            'message' => 'required|min:5',
           
        ]);

        // Save the request data if validation passes        
        Post::create([
            'user' => $request->user,            
            'type' => $request->type,
            'post_id' => $request->post_id,
            'content' => $request->message,            
        ]);         
        
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = null;
        if ($request->id) {
            $id = $request->id;
            session(['post_id' => $id]);
        }
        else if (session('post_id')) {
            $id = session('post_id'); 
        }
        else {
            abort(403, 'Resource not found.');
        }
        $user = $message = null;
        if (Auth::check()) {
            // The user is logged in...
            $user = Auth::user()->name;            
            // TODO: 'remember' user location from profile
            // $location = Auth::user()->location;
        }
        else {
            $message = 'Please <a href="/login">Login</a> or <a href="/register">Register</a> to comment.';
        }
        $post = Post::where('id', $id)->first();
        $comments = Post::where('post_id', $post->post_id)->where('type', 'c')->orderBy('created_at', 'asc')->paginate(10);
        return view('post', 
            [
                'user' => $user,
                'post' => $post,
                'message' => $message,
                'comments' => $comments
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
