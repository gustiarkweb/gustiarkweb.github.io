<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class NextController extends Controller
{
    public function lokasi()
    {
        $lokasi = Lokasi::get();

        return response()->json($lokasi);
    }
}
