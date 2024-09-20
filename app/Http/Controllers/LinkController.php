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
        $links = Link::all(); // Fetch all links
        return view('links.create', compact('links'));
    }

    public function store(Request $request)
    {
        // Validate and store the new link
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
