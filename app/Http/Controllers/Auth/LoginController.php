<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\INEGI\ModeloINEGI;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function blacklist($id){
        return response()->json($consulta = ModeloINEGI::select(DB::raw('1 as tipo'),'raz_social')
        ->where('id','=',$id)
        ->take(1)->first());
        //return response()->json($consulta=);
    }

    public function insertar(Request $request){
        $raz_social = $request ->raz_social;
        ModeloINEGI::create(['raz_social' => $raz_social]);
        return response()->json(['mensaje' => 'Registrado correctamente']);
    }

    public function actualizar(Request $request){
        $id = $request->id;
        $raz_social = $request->raz_social;

        $actualizar = ModeloINEGI::select('id','raz_social')
        ->where('id',$id)
        ->update(['raz_social' => $raz_social]);

        return response()->json(['mensaje' => 'Actualizado correctamente']);
    }

    public function eliminar(Request $request){

        $id = $request->id;

        $eliminar = ModeloINEGI::select('id','raz_social')
            ->where('id',$id)
            ->delete();

        return response()->json(['mensaje' => 'Eliminado correctamente']);
    }

    public function obtieneApi($id){
        $respuesta = $this->peticion('GET',"http://dev.myapp/api/black/{$id}");
        $datos = json_decode($respuesta);

        return response()->json($datos);
    }

    public function apiRegistra(){
        $respuesta = $this->peticion('POST',"http://dev.myapp/api/auth/insertar",[
           'headers'=>[
               'Content-Type'=>'application/x-ww-form-urlencoded',
               'X-Requested-With'=>'XMLHttpRequest'
           ],
           'form_params'=>[
               'raz_social'=>'Bamby es ...'
           ]
        ]);
        $datos = json_decode($respuesta);

        return response()->json($datos);
    }
}
