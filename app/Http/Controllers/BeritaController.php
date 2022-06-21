<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::all();
        return view('pages.admin-show-article', ['berita'=>$berita]);
    }

    public function showcontentindex()
    {
        $berita = Berita::all();
        return view('index', ['berita'=>$berita]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin-create-article');
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
    		'judul' => 'required',
    		'picture' => 'required',
    		'content' => 'required',
            
    	]);
 
        Berita::create([
    		'judul' => $request->judul,
    		'picture' => $request->picture,
    		'content' => $request->content,
            'kategori_id' => 1

    	]);
 
    	return redirect('/show-article');
    }

    public function delete($id)
    {
        $berita = Berita::find($id);
        $berita->delete();
        return redirect('/show-article');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::find($id);
    return view('pages.admin-edit-article', ['berita' => $berita]);
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
        $this->validate($request,[
    		'judul' => 'required',
    		'picture' => 'required',
    		'content' => 'required',
            
    	]);
 
       $berita = Berita::find($id);
       $berita->judul = $request->judul;
       $berita->picture = $request->picture ;
       $berita->content = $request->content;
            $berita ->save();
            return redirect('/show-article');
            
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
