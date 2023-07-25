<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Tujuan;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Blog::all();
        return view('backend.tujuan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.tujuan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:png,jpg',
            'body' => 'required'
        ], [
            'title.required' => 'Masukan Title Tujuan',
            'image.required' => 'Masukan image Tujuan',
            'image.image' => 'wajib berupa gambar',
            'image.mimes' => 'wajib berupa png atau jpg',
            'body.required' => 'Masukan body Tujuan',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        Blog::create([
            'title' => $request->title,
            'slug' => str_replace(' ', '-', $request->title),
            'image' => $imageName,
            'body' => $request->body
        ]);

        $request->image->move(public_path('img'), $imageName);

        return redirect()->route('blog.index')->with('success', 'Artikel Has Been Created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Blog::findOrfail($id);
        return view('backend.tujuan.edit', compact('data'));
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
        $request->validate([
            'title' => 'required',
            'image' => 'image|mimes:png,jpg',
            'body' => 'required'
        ], [
            'title.required' => 'Masukan Title Tujuan',
            'image.image' => 'wajib berupa gambar',
            'image.mimes' => 'wajib berupa png atau jpg',
            'body.required' => 'Masukan body Tujuan',
        ]);

        $data = Blog::findOrfail($id);

        if ($request->image) {
            # change image update

            unlink(public_path('img', $data->image));
            $imageName = time() . '.' . $request->image->extension();
            $data->update([
                'title' => $request->title,
                'slug' => str_replace(' ', '-', $request->title),
                'image' => $imageName,
                'body' => $request->body
            ]);
            $request->image->move(public_path('img'), $imageName);
        } else {
            # update without image
            $data->update([
                'title' => $request->title,
                'slug' => str_replace(' ', '-', $request->title),
                'body' => $request->body
            ]);
        }

        return redirect()->route('blog.index')->with('success', 'Artikel Has Been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Blog::findOrfail($id);
        $data->delete();
        return redirect()->route('blog.index')->with('success', 'Artikel Has Been Deleted');
    }
}
