<?php

namespace App\Http\Controllers;

use App\Obat;
use App\Pasien;
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
        $pasien_trush = Pasien::onlyTrashed()->get();
        // dd($pasien_trush);
        // $pemeriksaan = [];
        foreach ($pemeriksaan as $key => $item){
            foreach ($pasien_trush  as $keys => $items){
                if($item->data_pasien_id == $items->id){
                    unset($pemeriksaan[$key]);
                }
                // array_push($pemeriksaan, $item);
            }
        }
        // dd($pemeriksaan);


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
        return redirect()->route('notapemeriksaan.index')->with('status', 'Berhasil Tambah Nota Pemeriksaan' );       
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
    public function update(Request $request, $id)
    {
        //
        $notaPemeriksaan = NotaPemeriksaan::find($id);
        $biaya_lama = $request->get('biaya_penanganan_lama');
        $total_lama = $request->get('total_lama');
        $harga_obat = $total_lama-$biaya_lama;
        // dd($harga_obat);
        // $notaPemeriksaan->tanggal= $request->get('tanggal');
        $notaPemeriksaan->biaya_penanganan = $request->get('biaya_penanganan');
        $notaPemeriksaan->total = $harga_obat + $request->get('biaya_penanganan');
        
        $notaPemeriksaan->save();
        // dd($harga_obat);
        return redirect()->route('notapemeriksaan.index')->with('status', 'Berhasil Ubah Biaya Penanganan' );       
        
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

    public function getEditForm(Request $request){
        $id=$request->get('id');
        $data= NotaPemeriksaan::find($id);
        // dd($data);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('nota.edit_notapemeriksaan',compact('data'))->render()
        ),200);
    }

    
}
