<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{
    public function index(){
        $tanya = DB::table('pertanyaan')->get();
        return view('pertanyaan.indexPertanyaan', compact('tanya'));
    }
    public function create(){
        return view('pertanyaan.create');
    }
    public function store(Request $req){
        $req->validate([
            "judul"=>'unique:pertanyaan'
        ]);
        $query = DB::table('pertanyaan')->insert([
           "judul"=>$req["judul"],
           "isi"=>$req["isi"],
           "tanggal_buat"=>date("Y-m-d"),
           "tanggal_perbarui"=>date("Y-m-d"),
        ]);
        return redirect('/pertanyaan')->with('sukses','Berhasil bertanya');
    }
    public function show($idnya){
        $perlihatkan = DB::table('pertanyaan')->where('id',$idnya)->first();
        return view('pertanyaan.detail', compact('perlihatkan'));
    }
    public function edit($idnya){
        $edit =  DB::table('pertanyaan')->where('id',$idnya)->first();
        return view('pertanyaan.edit', compact('edit'));
    }
    public function update($idnya, Request $req){
        $req->validate([
            "judul"=>'unique:pertanyaan'
        ]);
        $update = DB::table('pertanyaan')
                ->where('id',$idnya)
                ->update([
                    'judul'=>$req['judul'],
                    'isi'=>$req['isi'],
                    'tanggal_perbarui'=>date("Y-m-d")
                ]);
        return redirect('/pertanyaan')->with('sukses','Berhasil edit pertanyaan');
    }
    public function destroy($idnya){
        $delete = DB::table('pertanyaan')->where('id',$idnya)->delete();
        return redirect('/pertanyaan')->with('sukses','Berhasil delete pertanyaan');
    }
}
