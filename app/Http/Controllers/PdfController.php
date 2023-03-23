<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Pdf;
use App\Http\Requests\PdfRequest;

class PdfController extends Controller
{


    public function index()
    {
        $archivos = Pdf::all();
        return view('administracion', compact('archivos'));
    }


    public function show($id)
    {
        $archivos = Pdf::findOrFail($id);
        return view('ver', compact('archivos'));
    }


    public function store(PdfRequest $request)
    {
      

        $archivo = new Pdf();

        $archivo->nombre = $request->nombre;
        $archivo->descripcion = $request->descripcion;
       
        $file_path = $request->file('ruta')->store('public/archivos');
        $archivo->ruta = str_replace('public/', '', $file_path);

        $archivo->save();

        return redirect()->route('administrar')
                         ->with('success', 'PDF subido correctamente.');
    }
    

    public function edit($id)
    {
        $archivo = Pdf::findOrFail($id);
        return view('editar',compact('archivo'));
    }


    public function destroy($id)
    {
        $archivo = Pdf::findOrFail($id);
        $archivo->delete();

        return redirect()->route('administrar');
    }


    public function update(PdfRequest $request, $id)
    {

        $pdf = Pdf::findOrFail($id);
        $pdf->nombre = $request['nombre'];
        $pdf->descripcion = $request['descripcion'];

        if ($request->hasFile('ruta')) {
            $archivo = $request->file('ruta');
            $nombre = time() . '_' . $archivo->getClientOriginalName();
            $archivo->storeAs('archivos', $nombre, 'public');
            $pdf->ruta = $nombre;
        }

        $pdf->save();

        return redirect()->route('administrar');
    }
}
