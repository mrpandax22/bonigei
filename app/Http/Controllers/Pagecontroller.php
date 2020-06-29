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

    public function admin_addal(){
        return view('admin.addalumno');
    }


    public function admin_addalumno(Request $request){   
        //validar los datos del request

        $validatedData = $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required|integer'
        ]);
        
            DB::table('alumnos')->insert(['nombre'=>($request->nombre), 'apellido'=>($request->apellido), 'dni'=>($request->dni), 'id_grupo'=>($request->grupo)]);
            return redirect('admin_addalumno')->with('success','Añadido correctamente');
        
         
        

    }
}
