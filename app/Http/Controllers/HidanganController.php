<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hidangan;
use Validator;

class HidanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json([
            'hidangan' => Hidangan::all()
        ]);
    }

    public function menuLimit(){
        return response()->json([
            'hidangan' => Hidangan::limit(5)->get()
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hidangan = Hidangan::where('id_hidangan',$id)->get();
        return response()->json(['hidangan' => $hidangan]);
    }
    public function showKategori($id)
    {
        $hidangan = Hidangan::where('kategori_hidangan',$id)->get();
        return response()->json(['hidangan' => $hidangan]);
    }
    public function showLimitKategori($id)
    {
        $hidangan = Hidangan::where('kategori_hidangan',$id)->limit(4)->get();
        return response()->json(['hidangan' => $hidangan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
