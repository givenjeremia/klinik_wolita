<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::where('role','!=', 'Admin')->get();
        return view('karyawan.index' , ['karyawan' => $users]);
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
        $user = new User();
        $user->nama = $request->get('name');
        $user->email = $request->get('email');
        $user->password = Hash::make($request->get('password'));
        $user->username = $request->get('username');
        $user->nomor_telepon = $request->get('nomor_telepon');
        $user->tanggal_lahir = $request->get('tanggal_lahir');
        $user->role = $request->get('roles');
        // $user->role = 1;
        $user->save();
        return redirect()->route('user.index')->with('status', 'Berhasil Tambah Karyawan' );       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        $user->nama = $request->get('nama');
        $user->email = $request->get('email');
        $user->username = $request->get('username');
        $user->nomor_telepon = $request->get('nomor_telepon');
        $user->tanggal_lahir = $request->get('tanggal_lahir');
        $user->role = $request->get('roles');
        $user->status = $request->get('status');

        // $user->role = 1;
        $user->save();
        return redirect()->route('user.index')->with('status', 'Berhasil Ubah Data Karyawan' );       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function getEditForm(Request $request){
        $id=$request->get('id');
        $data= User::find($id);
        // dd($data);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('karyawan.edit',compact('data'))->render()
        ),200);
    }
}
