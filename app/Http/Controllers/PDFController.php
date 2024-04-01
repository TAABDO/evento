<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PDFController extends Controller
{
    public function index()
    {
       $users =Auth::user();
       
    $pdf = Pdf::loadView('pdf',['users'=>$users]);
    return $pdf->download('invoice.pdf');
    }
}
