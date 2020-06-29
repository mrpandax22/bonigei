<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class Pagecontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Ir a la vista para añadir alumno
    public function admin_addal(){
        return view('admin.addalumno');
    }

    //Vista de la lista de alumnos
    public function admin_viewal(){
        //Busqueda sql y la manda a la vista
        $datos=DB::select("SELECT alumnos.nombre, alumnos.apellido, alumnos.dni FROM alumnos");
        return view('admin.viewal', compact('datos'));
    }

    //Añadir alumno
    public function admin_addalumno(Request $request){   
    

        $validatedData = $request->validate([  //Validar los datos del request
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required|integer'
        ]);
        //Insert a la tabla de alumnos y redireccionar a la vista con un mensaje
            DB::table('alumnos')->insert(['nombre'=>($request->nombre), 'apellido'=>($request->apellido), 'dni'=>($request->dni), 'id_grupo'=>($request->grupo)]);
            return redirect('admin_addalumno')->with('success','Añadido correctamente');
    }

    public function admin_searchal(Request $request){
        //buscador por dni

        $validatedData = $request->validate([
            'dni' => 'required|integer',
        ]);

        $dni=($request->dni);
        $datos= DB::select("SELECT alumnos.nombre, alumnos.apellido, alumnos.dni  FROM alumnos where alumnos.dni like '$dni%' ");
        return view('admin.searchal',compact('datos')); 
        
    }
}
