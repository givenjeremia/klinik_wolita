<?php

namespace App\Http\Controllers;

use App\Obat;
use App\Pasien;
use App\Persalinan;
use App\Pemeriksaan;
use Illuminate\Http\Request;

class TrushController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $obat_trush = Obat::onlyTrashed()->get();
        $pasien_trush = Pasien::onlyTrashed()->get();

        $pemeriksaan_trush = Pemeriksaan::onlyTrashed()->get();
        $persalinan_trush = Persalinan::onlyTrashed()->get();

        // dd($obat_trush);
       
        return view('trush.index',compact('obat_trush','pasien_trush','pemeriksaan_trush','persalinan_trush'));
        
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

    public function restore($type,$id){
        if($type == "obat"){
            $obat_trush = Obat::withTrashed()->where('id',$id)->restore();      
        }
        else if($type == "pasien"){
            $pasien_trush = Pasien::onlyTrashed()->where('id',$id)->restore();
        }
        else if($type == "pemeriksaan"){
            $pemeriksaan_trush = Pemeriksaan::onlyTrashed()->where('id',$id)->restore();
        }
        else{
            $persalinan_trush = Persalinan::onlyTrashed()->where('id',$id)->restore();
        }
        return redirect()->route('trush.index')->with('status', 'Berhasil Restore '.$type );

    }

    public function delete($type,$id){
        if($type == "obat"){
            $obat_trush = Obat::withTrashed()->where('id',$id);  
            $obat_trush->forceDelete();    
        }
        else if($type == "pasien"){
            $pasien_trush = Pasien::onlyTrashed()->where('id',$id)->restore();
        }
        else if($type == "pemeriksaan"){
            $pemeriksaan_trush = Pemeriksaan::onlyTrashed()->where('id',$id)->restore();
        }
        else{
            $persalinan_trush = Persalinan::onlyTrashed()->where('id',$id)->restore();
        }
        return redirect()->route('trush.index')->with('status', 'Berhasil Delete '.$type );

    }
    
}
