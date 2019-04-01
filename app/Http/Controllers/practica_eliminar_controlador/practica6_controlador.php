<?php
	namespace App\Http\Controllers\practica_eliminar_controlador;
	use App\Http\Controllers\Controller;
	use App\Models\PW\ModeloAlumno;





	class practica6_controlador extends Controller
	{

		// Funcion llamada en el get
	    public function ver_eliminar_datos($id)
	    {
            $registro = ModeloAlumno::where('id',$id)->take(1)->first();

            return view('PW/vista_eliminar')->with('registro',$registro);
        }
		//Funcion llamada en el put eliminar datos
        public function eliminar_datos($id){
			$dato_eliminar = ModeloAlumno::find($id);
			$dato_eliminar->delete();
			return redirect()->to('insertar_alumno');
		}






	}

 ?>