<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \PDF;

class PDFcontroller extends Controller
{
    public function PDF(){
        $pdf= \PDF::loadview('prueba');
        return $pdf->stream('pueba.pdf');
    }
}
