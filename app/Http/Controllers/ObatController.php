<?php

namespace App\Http\Controllers;

use App\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $obat = Obat::all();
        return view('obat.index',compact('obat'));
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
        $obat = new Obat();
        $obat->nama_obat = $request->get('nama_obat');
        $obat->harga = $request->get('harga');
        $obat->stock = $request->get('stock');
        $obat->kadaluarsa = $request->get('kadaluarsa');
        $obat->save();
        return redirect()->route('obat.index')->with('status', 'Berhasil Tambah '.$request->get('nama').' Obat' );

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function show(Obat $obat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function edit(Obat $obat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Obat $obat)
    {
        //
        $obat->nama_obat = $request->get('nama_obat');
        $obat->harga = $request->get('harga');
        $obat->stock = $request->get('stock');
        $obat->kadaluarsa = $request->get('kadaluarsa');
        $obat->save();
        return redirect()->route('obat.index')->with('status', 'Berhasil Ubah '.$request->get('nama').' Obat' );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function destroy($obat)
    {
        //
        $obat = Obat::find($obat);
        try{
            $obat->delete();
            return redirect()->route('obat.index')->with('status','Data Obat berhasil di hapus');
        }catch (\PDOException $e) {
            $msg="Data Gagal dihapus. Pastikan data child sudah hilang atau tidak berhubungan";

            return redirect()->route('obat.index')-with('error',$msg);
        }
        
    }

    public function getEditForm(Request $request){
        $id=$request->get('id');
        $data= Obat::find($id);
        // dd($data);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('obat.getEditForm',compact('data'))->render()
        ),200);
    }

}
