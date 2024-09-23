<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Link; // Add your Link model



class PostController extends Controller
{
    public function index()
    {
     //    $posts = Post::all(); 
      //  return view('links.index', compact('posts')); // Pass the posts to the view
        
    }

    public function create()
    {
        return view('posts.create');
    }

    // Method to handle the links page
    public function linksIndex()
    {
        $links = Link::all(); // Assuming you have a Link model
        return view('posts.links', compact('links')); // Adjust view as necessary
    }

    // Method to handle creating a new link
    public function linksCreate()
    {
        return view('posts.create_link'); // Create a view for link creation
    }


}
