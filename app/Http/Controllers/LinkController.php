<?php
namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        $links = Link::all(); // Fetch all links
        return view('links.index', compact('links')); // Pass the links to the view
    }

    public function create()
    {
        // Return the view for creating a new link
        return view('links.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'url' => 'required|url',
        'login' => 'nullable|string|max:255',
        'password' => 'nullable|string|max:255',
    ]);

  

    $link = new Link();
    $link->name = $request->input('name');
    $link->url = $request->input('url');
    $link->login = $request->input('login', null); // Default to null
    $link->password = $request->input('password', null); // Default to null
    $link->save();

    return redirect()->route('links.index')->with('success', 'Link stored successfully!');
}


    public function edit($id)
    {
        // Fetch the link by id and return the edit view
    }

    public function update(Request $request, $id)
    {
        // Validate and update the link
    }

    public function destroy($id)
    {
        // Delete the link by id
    }
}
