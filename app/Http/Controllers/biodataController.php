<?php

namespace App\Http\Controllers;

use App\Models\Biodata;

class biodataController extends Controller
{
    public function tampil()
    {
        $biodata =Biodata::all();
        return view('halaman_biodata',compact('biodata'));
    }
}
