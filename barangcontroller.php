<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class barangcontroller extends Controller
{
    public function created(){
        return view('forminputbarang');
    }
    public function savecreate(Request $request){
        DB::table('table_barang')->insert([
            'barang' => $request['xbarang'],
            'harga' => $request['xharga'],
            'spesifikasi' => $request['xspesifikasi'],
        ]);
    } 

    public function read(){
        $data = DB::table('table_barang')->get();
        return view ('daftarbarang',compact('data'));
    }

    public function update($id){
        $data = DB::table('table_barang')->where('id',$id);
        return view ('formupdatebarang',compact('data'));
    }

    public function saveupdate(request $request){
        DB::table('table_barang')->insert([
            'barang' => $request['xbarang'],
            'harga' => $request['xharga'],
            'spesifikasi' => $request['xspesifikasi'],
        ]);

        return ridirect('daftarbarang');
    }

    public function delete($id){
        DB::table('table_barang')->where('id',$id)->delete();
        return ridirect('daftarbarang');

}