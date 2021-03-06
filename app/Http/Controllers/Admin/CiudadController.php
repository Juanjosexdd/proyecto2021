<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ciudad;
use App\Models\Estado;

class CiudadController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('can:admin.ciudads.index')->only('index');
    //     $this->middleware('can:admin.ciudads.create')->only('create','store');
    //     $this->middleware('can:admin.ciudads.edit')->only('edit','update');
    //     $this->middleware('can:admin.ciudads.destroy')->only('destroy');

    // }

    public function index()
    {

        $ciudads = Ciudad::with('estado')->get();

        return view ('admin.ciudads.index', compact('ciudads'));
    }

    public function create()
    {
        $estados = Estado::pluck('nombre','id');

        return view ('admin.ciudads.create', compact('estados'));
        
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'nombre' => 'required',
        //     'slug' => 'required|unique:ciudads',
        //     'estados_id' =>'required'
        // ]);

        $ciudad = Ciudad::create($request->all());

        return redirect()->route('admin.ciudads.edit', $ciudad)->with('success', 'El municipio se creo con exito...');
    }

    public function edit(Ciudad $ciudad)
    {
        $estados = Estado::pluck('nombre','id');

        return view ('admin.ciudads.edit', compact('ciudad','estados'));
        
    }

    public function update(Request $request, Ciudad $ciudad)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => "required|unique:ciudads,slug,$ciudad->id",
        ]);

        $ciudad->update($request->all());
        return redirect()->route('admin.ciudads.edit', $ciudad)->with('success', 'El municipio se actualizó con exito...');
    }

    public function destroy(Ciudad $ciudad)
    {
        $ciudad->delete();

        return redirect()->route('admin.ciudads.index')->with('info', 'El municipio se eliminó con exito...');
    }

    public function estatuciudad(Ciudad $ciudad)
    {
        if($ciudad->estatus=="1"){

            $ciudad->estatus= '0';
            $ciudad->save();
            return redirect()->route('admin.ciudads.index')->with('success', 'El municipio se inactivo con éxito!');

       }else{

            $ciudad->estatus= '1';
            $ciudad->save();
            return redirect()->route('admin.ciudads.index')->with('success', 'El municipio se activó con éxito!');

        }
    }
}
