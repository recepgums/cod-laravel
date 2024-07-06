<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return response()->json($tags);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:tags,name|max:255',
        ]);

        $tag = Tag::create(['name' => $request->name]);
        return response()->json($tag);
    }
}
