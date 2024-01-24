<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Post;

use Illuminate\Http\Request;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $posts = Post::latest()->paginate(5);

        //render view with posts
        return view('posts.index', compact('posts'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('posts.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nisn'     => 'required',
            'skhun'     => 'required',
            'no_ijazah'   => 'required',
            'nama_lengkap'     => 'required',
            'tanggal_lahir'     => 'required',
            'agama'   => 'required',
            'alamat'     => 'required',
            'jenis_kelamin'     => 'required',
            'no_telp'   => 'required',
            'email'     => 'required',
            'jurusan'   => 'required',
            'nama_ayah' => 'required',
            'nama_ibu'  => 'required',
            'nama_wali' => 'required',

        ]);


        //create post
        Post::create([
            'nisn'     => $request->nisn,
            'skhun'     => $request->skhun,
            'no_ijazah'   => $request->no_ijazah,
            'nama_lengkap'     => $request->nama_lengkap,
            'tanggal_lahir'     => $request->tanggal_lahir,
            'agama'   => $request->agama,
            'alamat'     => $request->alamat,
            'jenis_kelamin'     => $request->jenis_kelamin,
            'no_telp'   => $request->no_telp,
            'email'     => $request->email,
            'jurusan'   => $request->jurusan,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu'  => $request->nama_ibu,
            'nama_wali' => $request->nama_wali,
        ]);

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('posts.show', compact('post'));
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return void
     */
    public function edit(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('posts.edit', compact('post'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'nisn'     => 'required',
            'skhun'     => 'required',
            'no_ijazah'   => 'required',
            'nama_lengkap'     => 'required',
            'tanggal_lahir'     => 'required',
            'agama'   => 'required',
            'alamat'     => 'required',
            'jenis_kelamin'     => 'required',
            'no_telp'   => 'required',
            'email'     => 'required',
            'jurusan'   => 'required',
            'nama_ayah' => 'required',
            'nama_ibu'  => 'required',
            'nama_wali' => 'required',
        ]);

        //get post by ID
        $post = Post::findOrFail($id);


            $post->update([
            'nisn'     => $request->nisn,
            'skhun'     => $request->skhun,
            'no_ijazah'   => $request->no_ijazah,
            'nama_lengkap'     => $request->nama_lengkap,
            'tanggal_lahir'     => $request->tanggal_lahir,
            'agama'   => $request->agama,
            'alamat'     => $request->alamat,
            'jenis_kelamin'     => $request->jenis_kelamin,
            'no_telp'   => $request->no_telp,
            'email'     => $request->email,
            'jurusan'   => $request->jurusan,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu'  => $request->nama_ibu,
            'nama_wali' => $request->nama_wali,
            ]);


        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
