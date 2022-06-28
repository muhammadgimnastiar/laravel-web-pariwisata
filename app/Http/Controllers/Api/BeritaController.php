<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Http\Resources\BeritaResource;
use Illuminate\Support\Facades\Validator;

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
        return response()->json([
            'total'=>$berita->count(),
            'message'=>'Retrivied successufy',
            'data'=>BeritaResource::collection($berita)
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[

            'judul'=>'required|max:100',
            'picture'=>'required|max:100', 
            'content'=> 'required|max:1000', 
            'kategori_id'=>'required|numeric'

        ]);

        if($validator->fails()){
            return response([
                'error'=>$validator->error(),
                'status'=>'Validator errror'
            ]);
        }

        $berita = Berita::create($request->all());
        return response([
            'data'=>new BeritaResource($berita), 
            'message'=>'Article has been ccreated'
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita = Berita::find($id);
        if($berita!=null){
            return response([
                'Article'=>new BeritaResource($berita),
                'message'=>'Retrived data success'
            ]);
        }else{
            return response([
                'message'=>'No data found',
            ], 401);
        }
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
        $validator = Validator::make($request->all(),[

            'judul'=>'required|max:100',
            'picture'=>'required|max:100', 
            'content'=> 'required|max:1000', 
            'kategori_id'=>'required|numeric'

        ]);

        if($validator->fails()){
            return response([
                'error'=>$validator->error(),
                'status'=>'Validator errror'
            ]);
        }

        $berita = Berita::find($id);
        if($berita!=null){
            $berita->update($request->all());
            return response([
                'Article'=>new BeritaResource($berita),
                'message'=>'Data has been updated'
            ]);
        }else{
            return response([
                'message'=>'No data found',
            ], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::find($id);
        if($berita!=null){
            $ berita->delete();
            return response([
                'status'=>'Berita berhasil didelete'
            ]);
        }else{
            return response([
                'ststus'=>'No data found'
            ], 403);
        }
    }
}
