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

     // show
    public function show()
    {
        $productos= Producto::select('*')
                    ->where('id', '>', 9999)
                    ->get();

        $params['productos'] = $productos;


        return view('productos', $params);
    }


        // store
    public function cargar(Request $request)
    {   
        $producto = new \App\Models\Producto;
        $producto->id           = $request->get('codigo');
        $producto->nombre       = $request->get('nombre');
        $producto->descripcion  = $request->get('descripcion');
        $producto->peso         = $request->get('peso');
        $producto->cantidad     = $request->get('cantidad');
        $producto->clase        = 0;
        $producto->familia      = 0;
        $producto->save();

        $productos= Producto::select('*')
                    ->where('id', '>', 9999)
                    ->get();

        $params['productos'] = $productos;

        $params['mensaje'] = 'Producto agregado correctamente';

        $ultimo= Producto::latest('id')->first();

        $proximo = $ultimo->id +1;

        $codigo_barras =DNS1D::getBarcodeSVG($proximo, 'C39');

        $params['codigo_nuevo'] = $proximo;
        $params['codigo_barras'] = $codigo_barras;

        return view('barcode', $params);
    }


    public function ver()
    {   
        
        $producto = $_GET['codigo'];
        echo("<h1>".
        DNS1D::getBarcodeSVG($producto, 'C39')."</h1>");



    }
}
