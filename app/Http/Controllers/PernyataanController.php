<?php

namespace App\Http\Controllers;

use App\Models\Pernyataan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Storage;

class PernyataanController extends Controller
{
    public function index()
    {
        return view('form_pernyataan');
    }

    public function simpan(Request $request)
    {

        $this->validate($request, [
            'nisn' => 'unique:pernyataan,nisn,' . $request->nisn
        ]);

        $input = $request->except('_token');
        Pernyataan::create($input);

        $data = Pernyataan::where('nisn', $request->nisn)->first();

        $pdf = PDF::loadView('form_pdf', compact('data'));
        Storage::put('public/' . $request->jenjang . '/' . $request->nisn . '.pdf', $pdf->output());

        return view('form_berhasil');
    }
}
