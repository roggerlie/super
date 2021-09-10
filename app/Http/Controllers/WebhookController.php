<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebhookController extends Controller
{
    public function tagihan(Request $request)
    {
        Storage::put('tes.txt', $request);
    }
}
