<?php

namespace App\Http\Controllers;

use App\Pemeriksaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemeriksaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pemeriksaan = Pemeriksaan::all();
        return view('pemeriksaan.index',compact('pemeriksaan'));
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
        $user = Auth::user();
        $pemeriksaan = new Pemeriksaan();
        $pemeriksaan->tanggal_periksa = $request->get('tanggal_periksa');
        $pemeriksaan->tanggal_kembali = $request->get('tanggal_kembali');
        $pemeriksaan->kunjungan_ke = $request->get('kunjungan_ke');
        $pemeriksaan->keluhan = $request->get('keluhan');
        $pemeriksaan->terapi = $request->get('terapi');
        $pemeriksaan->data_pasien_id = $request->get('pasien_id');
        $pemeriksaan->username = $user->username;
        $pemeriksaan->save();
        return redirect()->route('pemeriksaan.index')->with('status', 'Berhasil Tambah Pemerikasaan' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pemeriksaan  $pemeriksaan
     * @return \Illuminate\Http\Response
     */
    public function show(Pemeriksaan $pemeriksaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pemeriksaan  $pemeriksaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pemeriksaan $pemeriksaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pemeriksaan  $pemeriksaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemeriksaan $pemeriksaan)
    {
        //
        $user = Auth::user();
        $pemeriksaan->tanggal_periksa = $request->get('tanggal_periksa');
        $pemeriksaan->tanggal_kembali = $request->get('tanggal_kembali');
        $pemeriksaan->kunjungan_ke = $request->get('kunjungan_ke');
        $pemeriksaan->keluhan = $request->get('keluhan');
        $pemeriksaan->terapi = $request->get('terapi');
        $pemeriksaan->data_pasien_id = $request->get('pasien_id');
        $pemeriksaan->username = $user->username;
        $pemeriksaan->save();
        return redirect()->route('pemeriksaan.index')->with('status', 'Berhasil Ubah Data Pemerikasaan' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pemeriksaan  $pemeriksaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemeriksaan $pemeriksaan)
    {
        //
    }

    public function getEditForm(Request $request){
        $id=$request->get('id');
        $data= Pemeriksaan::find($id);
        // dd($data);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('pemeriksaan.getEditForm',compact('data'))->render()
        ),200);
    }
}
