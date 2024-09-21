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


public function show($id)
{
    $link = Link::findOrFail($id);
    return view('links.show', compact('link'));
}
public function edit($id)
{
    $link = Link::findOrFail($id);
    return view('links.edit', compact('link'));
}


public function update(Request $request, $id)
{
    $link = Link::findOrFail($id);
    $link->update($request->all());
    return redirect()->route('links.index', $link->id)->with('success', 'Link updated successfully');
}


public function destroy($id)
{
    $link = Link::findOrFail($id);
    $link->delete();
    return redirect()->route('links.index')->with('success', 'Link deleted successfully');
}


}
