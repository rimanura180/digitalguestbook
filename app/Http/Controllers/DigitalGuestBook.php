<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DigitalGuestBook extends Controller
{
    public function halaman_DigitalGuestBook(){
    $data['judul'] = 'Digital Guest Book';
        return view('DigitalGuestBook', $data);
    }
}
  