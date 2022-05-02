<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Milon\Barcode\DNS1D;

class BarCodeController extends Controller
{
     // index
    public function index()
    {
        $ultimo= Producto::latest('id')->first();

        $proximo = $ultimo->id +1;

        $codigo_barras =DNS1D::getBarcodeSVG($proximo, 'C39');

        $params['codigo_nuevo'] = $proximo;
        $params['codigo_barras'] = $codigo_barras;

        return view('barcode', $params);
    }
}
