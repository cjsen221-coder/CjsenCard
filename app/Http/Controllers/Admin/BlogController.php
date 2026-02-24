<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(9); // pagination
        return view('blog.index', compact('blogs'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        if ($request->hasFile('image')) {
            $originalName = $request->file('image')->getClientOriginalName();
            $filename = time() . '_' . preg_replace('/[^A-Za-z0-9_\-\.]/', '_', $originalName);

            $request->file('image')->move(public_path('blogs'), $filename);

            $data['image'] = 'blogs/' . $filename;
        }

        Blog::create($data);

        return redirect()->route('blogs.index')->with('success', 'Article créé avec succès !');
    }

    public function show(Blog $blog)
    {
        return view('blog.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('blog.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);


        if ($request->hasFile('image')) {
            // Supprimer l'ancienne image si elle existe
            if ($blog->image && file_exists(public_path($blog->image))) {
                unlink(public_path($blog->image));
            }

            $filename = time() . '_' . $request->file('image')->getClientOriginalName();

            $request->file('image')->move(public_path('blogs'), $filename);

            $validated['image'] = 'blogs/' . $filename;
        }

        $blog->update($validated);

        return redirect()->route('blogs.index')->with('success', 'Blog mis à jour avec succès !');
    }

    public function destroy(Blog $blog)
    {
        if ($blog->image) {
            \Storage::disk('public')->delete($blog->image);
        }
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Article supprimé avec succès !');
    }
}
