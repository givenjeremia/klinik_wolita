<?php

namespace App\Http\Controllers;

use App\Obat;
use App\Pasien;
use App\Persalinan;
use App\NotaPersalinan;
use Illuminate\Http\Request;

class NotaPersalinanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $notaPersalinan = NotaPersalinan::all();
        // dd($notaPemeriksaan);
        // dd($notaPersalinan);

        return view('nota.index_persalinan',compact('notaPersalinan'));
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
        $persalinan = Persalinan::all();
        $pasien_trush = Pasien::onlyTrashed()->get();
        // dd($pasien_trush);
        // $pemeriksaan = [];
        foreach ($persalinan as $key => $item){
            foreach ($pasien_trush  as $keys => $items){
                if($item->data_pasien_id == $items->id){
                    unset($persalinan[$key]);
                }
                // array_push($pemeriksaan, $item);
            }
        }
        // dd($)

        return view('nota.baru_persalinan',compact('obats','persalinan'));
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
        $cart = session()->get('obat');

        $np = new NotaPersalinan;
        $np->tanggal = $request->get('tanggal');
        $np->biaya_penanganan = $request->get('biaya_penanganan');
        $np->jenis_pembayaran = $request->get('jenis_pembayaran');
        $np->status_pembayaran= $request->get('status_pembayaran');
        $np->lama_menginap = $request->get('lama_menginap');
        $np->save();
        $id_new = $np->id;
        error_log($id_new);
        $total = 0;
        foreach($cart as $id =>$details) 
        {
            $total += $details['kuantitas'] * $details['harga'];
            $np->obat()->attach($id,['nota_id' =>$id_new,'persalinan_id' =>$request->get('persalinan_id'),'jumlah' =>$details['kuantitas'], 'keterangan' =>$details['keterangan'] ,'harga' =>$details['harga'] * $details['kuantitas']]);
        }
        
        $np->total = $total + $request->get('biaya_penanganan');
        $np->save();
        session()->forget('obat');
        return redirect()->route('notapersalinan.index')->with('status', 'Berhasil Tambah Nota Persalinan' );       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NotaPersalinan  $notaPersalinan
     * @return \Illuminate\Http\Response
     */
    public function show(NotaPersalinan $notaPersalinan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NotaPersalinan  $notaPersalinan
     * @return \Illuminate\Http\Response
     */
    public function edit(NotaPersalinan $notaPersalinan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NotaPersalinan  $notaPersalinan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $notaPersalinan = NotaPersalinan::find($id);
        $biaya_lama = $request->get('biaya_penanganan_lama');
        $total_lama = $request->get('total_lama');
        $harga_obat = $total_lama-$biaya_lama;

        $notaPersalinan->biaya_penanganan = $request->get('biaya_penanganan');
        $notaPersalinan->total = $harga_obat + $request->get('biaya_penanganan');
        $notaPersalinan->jenis_pembayaran = $request->get('jenis_pembayaran');
        $notaPersalinan->status_pembayaran = $request->get('status_pembayaran');
        $notaPersalinan->save();
        return redirect()->route('notapersalinan.index')->with('status', 'Berhasil Ubah Nota Persalinan');       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NotaPersalinan  $notaPersalinan
     * @return \Illuminate\Http\Response
     */
    public function destroy(NotaPersalinan $notaPersalinan)
    {
        //
    }
    public function addToCart($id)
    {
        $product = Obat::find($id);
        $cart = session()->get("cart");
        if(!isset($cart[$id])){
            $cart[$id] = [
                "name" => $product->nama_obat,
                "form" => $product->formula,
                "kuantitas" => 1,
                "harga" => $product->harga,
                "gambar" => $product->gambar
            ];
        }
        else{
            $cart[$id]["kuantitas"]++;
        }
        session()->put("cart", $cart);
        return redirect()->back()->with("status","Obat added to cart successfully!");

    }

    public function getEditForm(Request $request){
        $id=$request->get('id');
        $data= NotaPersalinan::find($id);
        // dd($data);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('nota.edit_notapersalinan',compact('data'))->render()
        ),200);
    }

}
