<?php

namespace App\Http\Controllers;

use App\Models\Pernyataan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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
        $qrcode = $data->nama_ortu . '
' . date('d/m/Y') . '
' . $data->nama_siswa . '
' . $data->jenjang . '
Surat Pernyataan';
        $image = base64_encode(QrCode::format('png')->size(100)->errorCorrection('H')->generate($qrcode));

        $pdf = PDF::loadView('form_pdf', compact('data', 'image'));
        Storage::put('public/' . $request->jenjang . '/' . $request->nisn . '.pdf', $pdf->output());

        return view('form_berhasil');
    }

    public function test($nis)
    {
        $data = Pernyataan::where('nisn', $nis)->first();
        $qrcode = $data->nama_ortu . '
' . date('d/m/Y') . '
' . $data->nama_siswa . '
' . $data->jenjang . '
Surat Pernyataan';
        $image = base64_encode(QrCode::format('png')->size(100)->errorCorrection('H')->generate($qrcode));
        $pdf = PDF::loadView('form_pdf', compact('data', 'image'));
        return $pdf->download('adadad.pdf');
        // return $pdf->stream("dompdf_out.pdf", array("Attachment" => false));
        // return view('form_pdf', compact('data', 'image'));

    }
}
