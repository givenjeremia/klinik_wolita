<?php

namespace App\Http\Controllers;

use App\Persalinan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersalinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $persalinans = Persalinan::all();
        return view('persalinan.riwayat',compact('persalinans'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('persalinan.baru');
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
        $user = Auth::user();
        $persalinan = new Persalinan();
        $persalinan->tanggal_masuk = $request->get('tanggal_masuk');
        $persalinan->tanggal_persalinan = $request->get('tanggal_persalinan');
        $persalinan->nama_suami = $request->get('nama_suami');
        $persalinan->perkerjaan_suami = $request->get('perkerjaan_suami');
        $persalinan->persalinan_ke = $request->get('persalinan_ke');
        $persalinan->data_pasien_id = $request->get('pasien_id');
        $persalinan->username = $user->username;
        $persalinan->dokter_bidan = $request->get('dokter_bidan');
        $persalinan->save();
        return redirect()->route('persalinan.index')->with('status', 'Berhasil Tambah '.$request->get('nama').' Pasien Bersalin' );
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Persalinan  $persalinan
     * @return \Illuminate\Http\Response
     */
    public function show(Persalinan $persalinan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Persalinan  $persalinan
     * @return \Illuminate\Http\Response
     */
    public function edit(Persalinan $persalinan)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Persalinan  $persalinan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persalinan $persalinan)
    {
        //
        $user = Auth::user();
        $persalinan->tanggal_masuk = $request->get('tanggal_masuk');
        $persalinan->tanggal_persalinan = $request->get('tanggal_persalinan');
        $persalinan->nama_suami = $request->get('nama_suami');
        $persalinan->perkerjaan_suami = $request->get('perkerjaan_suami');
        $persalinan->persalinan_ke = $request->get('persalinan_ke');
        $persalinan->status_kelahiran = $request->get('status_persalinan');
        $persalinan->data_pasien_id = $request->get('pasien_id');
        $persalinan->username = $user->username;
        $persalinan->dokter_bidan = $request->get('dokter_bidan');
        $persalinan->save();
        return redirect()->route('persalinan.index')->with('status', 'Berhasil Ubah Data Pasien Bersalin' );
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Persalinan  $persalinan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persalinan $persalinan)
    {
        //
    }

    public function getEditForm(Request $request){
        $id=$request->get('id');
        $data= Persalinan::find($id);
        // dd($data);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('persalinan.getEditForm',compact('data'))->render()
        ),200);
    }

}
