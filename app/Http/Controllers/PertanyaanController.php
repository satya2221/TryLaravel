<?php

namespace App\Http\Controllers;

use App\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{
    public function index(){
        //$tanya = DB::table('pertanyaan')->get();

        $tanya = Pertanyaan::all();
        return view('pertanyaan.indexPertanyaan', compact('tanya'));
    }
    public function create(){
        return view('pertanyaan.create');
    }
    public function store(Request $req){
        $req->validate([
            "judul"=>'unique:pertanyaan'
        ]);

//        $query = DB::table('pertanyaan')->insert([
//           "judul"=>$req["judul"],
//           "isi"=>$req["isi"],
//           "tanggal_buat"=>date("Y-m-d"),
//           "tanggal_perbarui"=>date("Y-m-d"),
//        ]);

//        $tanya = new Pertanyaan;
//        $tanya->judul = $req['judul'];
//        $tanya->isi = $req['isi'];
//        $tanya->tanggal_buat = date("Y-m-d");
//        $tanya->tanggal_perbarui = date("Y-m-d");
//        $tanya->save();

        $tanya = Pertanyaan::create([
            "judul"=>$req["judul"],
            "isi"=>$req["isi"],
            "tanggal_buat"=>date("Y-m-d"),
            "tanggal_perbarui"=>date("Y-m-d")
        ]);


        return redirect('/pertanyaan')->with('sukses','Berhasil bertanya');
    }
    public function show($idnya){
        //$perlihatkan = DB::table('pertanyaan')->where('id',$idnya)->first();

        $perlihatkan = Pertanyaan::find($idnya);
        return view('pertanyaan.detail', compact('perlihatkan'));
    }
    public function edit($idnya){
        //$edit =  DB::table('pertanyaan')->where('id',$idnya)->first();

        $edit = Pertanyaan::find($idnya); ;
        return view('pertanyaan.edit', compact('edit'));
    }
    public function update($idnya, Request $req){

//        $update = DB::table('pertanyaan')
//                ->where('id',$idnya)
//                ->update([
//                    'judul'=>$req['judul'],
//                    'isi'=>$req['isi'],
//                    'tanggal_perbarui'=>date("Y-m-d")
//                ]);

//        $update = Pertanyaan::find($idnya);
//        $update->judul = $req['judul'];
//        $update->isi = $req['isi'];
//        $update->tanggal_perbarui = date("Y-m-d");
//        $update->save();

        $update = Pertanyaan::where('id',$idnya)->update([
            'judul'=>$req['judul'],
            'isi'=>$req['isi'],
            'tanggal_perbarui'=>date("Y-m-d")
        ]);

        return redirect('/pertanyaan')->with('sukses','Berhasil edit pertanyaan');
    }
    public function destroy($idnya){
        //$delete = DB::table('pertanyaan')->where('id',$idnya)->delete();

        Pertanyaan::destroy($idnya);

        return redirect('/pertanyaan')->with('sukses','Berhasil delete pertanyaan');
    }
}
