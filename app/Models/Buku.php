<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Peminjaman;

class Buku extends Model
{
    use HasFactory;
    protected $guarded = [];

     public function kategori(){
        return $this->belongsTo(Kategori::class, 'id_kategori' );
   
    }
  public function peminjaman(){
            return $this->hasMany(peminjaman::class, 'nama');

     
    }
}
