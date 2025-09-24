(<?php

use App\Http\Controllers\Post\Controller;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
route ::get('/about',function (){
return 'selamat datang di halaman about';
});

route ::get('/profil',function (){
    return'selamat datang di halaman profile';
});

route ::get('/biodata/{nama_lengkap}/{tangggal_lahir}/{jenis_kelamin}/{tempat_lahir}/{alamat}/{agama}/{no_telp}',function($nama_lengkap,$tanggal_lahir,$jenis_kelamin,$tempat_lahir,$alamat,$agama,$no_telp){
    return"<h1>BIODATA</h1><br>".
    "nama lengkap : $nama_lengkap<br> ".
    "tanggal lahir :$tanggal_lahir<br>".
    "jenis kelamin :$jenis_kelamin<br>".
    "tempat lahir :$tempat_lahir<br>".
    "alamat :$alamat<br>".
    "agama : $agama<br>".
    "no telp :$no_telp<br>";
});

route ::get('/persegi/ {sisi}/{sisi1}',function ($sisi1,$sisi2){
    $hasil=$sisi1*$sisi2;
    return"
    rumus persegi : sisi x sisi <br>
    sisi1 :$sisi1 <br>
    sisi2 :$sisi2 <br>
    hasil :$hasil";
});

route ::get('/persegi_panjang/ {panjang}/{lebar}',function ($panjang,$lebar){
    $hasil=$panjang*$lebar;
    return"
    rurmus persegi panjang : panjang x lebar<br>
    panjang :$panjang<br> 
    lebar :$lebar <br>
    hasil :$hasil ";
});

route ::get('/lingkaran/ {phi}/{jari_jari}',function ($phi,$jari_jari){
    $hasil=$phi*$jari_jari;
    return"
    rumus persegi panjang :phi x jari jari<br>
    phi:$phi<br>
    jari jari :$jari_jari
    hasil :$hasil ";
});

route::get('/kp/{nama_pemesan}/{no_telp}/{tgl}/{jenis}/{menu}/{jumlah}', function ($nama,$no,$tgl,$jenis,$menu,$jumlah) {
    $diskon10 = "10";
    if ($jenis == "Makanan") {
    
    if ($menu == "Seblak") {
        $harga = 10000;
    } else if ($menu == "Pentol") {
       $harga = 15000;
    } else if ($menu == "Batagor") {
       $harga = 20000;
    } else {
       $harga = 0;
    }
} elseif ($jenis == "Minuman") {
    if ($menu == "kopi") {
       $harga = 5000;
    } else if ($menu == "jus") {
       $harga = 10000;
    } else if ($menu == "thai tea") {
       $harga = 15000;
    } else {
       $harga = 0;
    }
} else {
    echo "Harap pilih menu! <br>";
}



$total = $harga * $jumlah;
$diskon = ($total * $diskon10) / 100;
$setelahdiskon = $total * (1 - ($diskon10 / 100));




    echo "<h1>~Assalaam cofee~</h1>
    =============================<br>
    Nama Pemesan : $nama<br>
    No Telepon : $no<br>
    Tanggal Beli : $tgl<br>
    Jenis : $jenis<br>
    Menu : $menu<br>
    Harga : $harga<br>
    Jumlah : $jumlah<br>
    --------------------------------------------<br>
    Total : $total<br>";

    if ($total > 50000) {
    echo "Diskon 10% : $diskon<br>";
} else {
    echo "Tidak dapat diskon<br>";
}
echo "
    --------------------------------------------<br>
    Setelah Diskon : $setelahdiskon<br>";
});
route ::get('review/nama_lengkap}',function ($nama_lengkap){
    return "nama_lengkap :$nama_lengkap";
});
route::get('halaman1',function(){

$idola =["ronaldo","buakaw","MH mancing","ramon tanque","mike tyson","islam makhachev","moh.ali","khabib nurmagomedov","khamzat cimaev","rodtang"];
    return view('tampil1',compact('idola'));
});

route::get('halaman2',function(){

$hobi =["futsal","mancing","ngurek","ngarit","joget","ngaronda","ngopi","lari","jalan","makan"];
    return view('tampil2',compact('hobi'));
});

route::get('halaman3',function(){

$siswa =["alif","bara","dikri","teguh","rey","davin","fakhri","raka","zihad","ilmen"];
    return view('tampil3',compact('siswa'));
});

route::get('post',function(){
//menghapus data
//$post = post::find(1);
//$post->delete();
//return $post;

//mengubah data
$post = new post;
$post->title ="menjadi temen yang baik";
$post->content="menjadi teman yang baik adalah hal yang positif";
$post->save();
return $post;



//mengubah data
   //  $post =post::find(1);
    //$post->content = "belajar dengan giat lagi";
   // $post->save();
 //   return $post;

    //menampilkan semua data
 //$post =post:: all();

//return view('halaman_post',compact('post'));
});

route::get('siswa',function(){
 
    // return $siswa = siswa::all();

    
   $siswa =siswa::all();

   return view('halaman_siswa',compact('siswa'));
   
   
});


Route::get('Biodata' , function () {

    $biodata =biodata:: all();

    //$biodata = new biodata;
   //$biodata->nama_lengkap = "fadil";
   //$biodata->jenis_kelamin = "Laki-Laki";
   //$biodata->tanggal_lahir = "2009-07-13";
   //$biodata->tempat_lahir = "Bandung";
   //$biodata->agama = "Islam";
   //$biodata->alamat = "Bandung";
   //$biodata->telepon = "084097657823";
   //$biodata->email = "fadil@gmail.com";
   //$biodata->save();
   //return $biodata;
    // $biodata = biodata::all();

     return view('biodata', compact('biodata'));

});

route::get('post',[postsController::class,'tampil']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/product',[ProductController::class,'index'])->name('product');