<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();

        return view("index",[
            "blogs" => $blogs
        ]);
    }

    public function addblog()
    {
        return view("blogs.addblog");
    }

    public function editblog($id)
    {
        $blog = Blog::find($id);

        return view("blogs.editblog",[
            "blog" => $blog
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blog = $request->validate([
            "naziv" => "required|string",
            "opis" => "required|string"
        ]);
        Blog::create($blog);

        return redirect("/");
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $newBlog = $request->validate([
            "naziv" => "required|string",
            "opis" => "required|string"
        ]);


        $blog = Blog::find($id);

        $blog->naziv = $newBlog["naziv"];
        $blog->opis = $newBlog["opis"];

        $blog->save();

        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::find($id);
        $blog->delete();

        return redirect("/");
    }
}
