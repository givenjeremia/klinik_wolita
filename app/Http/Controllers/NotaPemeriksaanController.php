<?php

namespace App\Http\Controllers;

use App\Obat;
use App\Pemeriksaan;
use App\NotaPemeriksaan;
use Illuminate\Http\Request;

class NotaPemeriksaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $notaPemeriksaan = NotaPemeriksaan::all();
        // dd($notaPemeriksaan);

        return view('nota.index_pemeriksaan',compact('notaPemeriksaan'));
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $obats = Obat::all();
        $pemeriksaan = Pemeriksaan::all();

        return view('nota.baru_pemeriksaan',compact('obats','pemeriksaan'));
        
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
        // dd("cc");
        $cart = session()->get('obat');

        $np = new NotaPemeriksaan;
        $np->tanggal = $request->get('tanggal');
        $np->biaya_penanganan = $request->get('biaya_penanganan');
        
        $np->save();
        $id_new = $np->id;
        error_log($id_new);
        // $total = $np->TambahObat($cart,$user);
        $total = 0;
        foreach($cart as $id =>$details) 
        {
            $total += $details['kuantitas'] * $details['harga'];
            $np->obat()->attach($id,['nota_id' =>$id_new,'pemeriksaan_id' =>$request->get('pemeriksaan_id'),'jumlah' =>$details['kuantitas'], 'keterangan' =>$details['keterangan'] ,'harga' =>$details['harga'] * $details['kuantitas']]);
        }
        
        $np->total = $total +$request->get('biaya_penanganan');
        $np->save();
        session()->forget('obat');
        return redirect()->route('notapersalinan.index')->with('status', 'Berhasil Ubah Tambah Nota Pemeriksaan' );       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NotaPemeriksaan  $notaPemeriksaan
     * @return \Illuminate\Http\Response
     */
    public function show(NotaPemeriksaan $notaPemeriksaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NotaPemeriksaan  $notaPemeriksaan
     * @return \Illuminate\Http\Response
     */
    public function edit(NotaPemeriksaan $notaPemeriksaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NotaPemeriksaan  $notaPemeriksaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NotaPemeriksaan $notaPemeriksaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NotaPemeriksaan  $notaPemeriksaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(NotaPemeriksaan $notaPemeriksaan)
    {
        //
    }

    public function addObatToCart($id,$keterangan)
    {
        // dd($keterangan);
        $product = Obat::find($id);
        // dd($product);
        $obat = session()->get("obat");
        if(!isset($obat[$id])){
            $obat[$id] = [
                "name" => $product->nama_obat,
                "kuantitas" => 1,
                "keterangan"=> $keterangan,
                "harga" => $product->harga,
            ];
        }
        else{
            $obat[$id]["kuantitas"]++;
        }
        session()->put("obat", $obat);
        return redirect()->back()->with("status","Obat added successfully!");

    }
    
}
