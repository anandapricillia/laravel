<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelKategory;
use Illuminate\Support\Facades\DB;


class KategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Kategory = modelKategory::all();
        return view('category.index',compact('Kategory'));
    }
    public function search(Request $request)
    {
        $query = $request->input('cari');
        $hasil = modelKategory::where('nama_kategory', 'LIKE', '%' . $query . '%')->paginate(10);
        return view('category.result', compact('hasil', 'query'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('kategori')->insert([
            'nama_kategory' => $request->nama_kategori,
            'slug' => $request->slug
        ]);
	    return redirect('/kategory');
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
        $kategori = DB::table('kategori')->where('id',$id)->get();
        return view('dashboard.edit',['kategori' => $kategori]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('kategori')->where('id',$request->id)->update([
            'nama_kategory' => $request->nama_kategory,
            'slug' => $request->slug
            ]);

            return redirect('/kategory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('kategori')->where('id',$id)->delete();
        return redirect('/kategory');
    }

}
