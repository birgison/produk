<?php

namespace App\Models;
use illuminate\Database\Eloquent\factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
   use HasFactory;

   //kolom/field yang boleh diisi
   protected $fillable =['nama_lengkap','jenis_kelamin','tanggal_lahir','kelas'];
   public $timestamp = true;
}

?>