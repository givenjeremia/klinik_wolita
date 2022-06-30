<?php

namespace App\Http\Controllers;

use App\User;
use App\Pasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pasiens = Pasien::all();
        return view('pasien.index',compact('pasiens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pasien.baru');
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
        $new_pasien = new Pasien();
        $new_pasien->NIK = $request->get('NIK');
        $new_pasien->nama = $request->get('nama');
        $new_pasien->tanggal_lahir = $request->get('tanggal_lahir');
        $new_pasien->jenis_kelamin = $request->get('jenis_kelamin');
        $new_pasien->umur = $request->get('umur');
        $new_pasien->perkerjaan = $request->get('perkerjaan');
        $new_pasien->alamat = $request->get('alamat');
        $new_pasien->nomor_telepon = $request->get('nomor_telepon');
        $new_pasien->username = $user->username;
        $new_pasien->save();
        return redirect()->route('pasien.index')->with('status', 'Berhasil Tambah '.$request->get('nama').' Pasien' );

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasien $pasien)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pasien $pasien)
    {
        //
        $user = Auth::user();
        $pasien->NIK = $request->get('NIK');
        $pasien->nama = $request->get('nama');
        $pasien->tanggal_lahir = $request->get('tanggal_lahir');
        $pasien->jenis_kelamin = $request->get('jenis_kelamin');
        $pasien->umur = $request->get('umur');
        $pasien->perkerjaan = $request->get('perkerjaan');
        $pasien->alamat = $request->get('alamat');
        $pasien->nomor_telepon = $request->get('nomor_telepon');
        $pasien->username = $user->username;
        $pasien->save();
        return redirect()->route('pasien.index')->with('status', 'Berhasil Ubah '.$request->get('nama').' Pasien' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy($pasien)
    {
        $pasien = Pasien::find($pasien);
        try{
            $pasien->delete();
            return redirect()->route('pasien.index')->with('status','Data Obat berhasil di hapus');
        }catch (\PDOException $e) {
            $msg="Data Gagal dihapus. Pastikan data child sudah hilang atau tidak berhubungan";

            return redirect()->route('pasien.index')-with('error',$msg);
        }
    }
    public function getEditForm(Request $request){
        $id=$request->get('id');
        $data= Pasien::find($id);
        // dd($data);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('pasien.getEditForm',compact('data'))->render()
        ),200);
    }
}
