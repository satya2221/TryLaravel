<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = "pertanyaan";
    public $timestamps = false;

    // dibawah ini untuk metode mass asignment
    // fillable untuk yang bisa diisi
    // guarded untuk yang nggak boleh diisi
    protected $fillable = ['judul','isi','tanggal_buat', 'tanggal_perbarui'];
//    protected $guarded = [];
}
