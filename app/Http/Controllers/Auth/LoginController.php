<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\INEGI\ModeloINEGI;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use function GuzzleHttp\json_decode;

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


    public function blacklist($id)
    {
        return response()->json($consulta = ModeloINEGI::select(DB::raw('1 as tipo'), 'raz_social')
            ->where('id', '=', $id)
            ->take(1)->first());
        //return response()->json($consulta=);
    }

    public function insertar(Request $request)
    {

        $raz_social = $request->raz_social;
        $nombre_act = $request->nombre_act;
        $nom_vial = $request->nom_vial;
        ModeloINEGI::create(['nombre_act' => $nombre_act, 'raz_social' => $raz_social, 'nom_vial' => $nom_vial]);
        return response()->json(['mensaje' => 'Registrado correctamente']);
    }

    public function actualizar(Request $request)
    {
        $id = $request->id;
        $nombre_act = $request->nombre_act;
        $raz_social = $request->raz_social;
        $nom_vial = $request->nom_vial;

        $actualizar = ModeloINEGI::select('id', 'nombre_act', 'nom_vial')
            ->where('id', $id)
            ->update(['nombre_act' => $nombre_act, 'raz_social' => $raz_social, 'nom_vial' => $nom_vial]);

        return response()->json(['mensaje' => 'Actualizado correctamente']);
    }

    public function eliminar(Request $request)
    {

        $id = $request->id;

        $eliminar = ModeloINEGI::select('id', 'raz_social')
            ->where('id', $id)
            ->delete();

        return response()->json(['mensaje' => 'Eliminado correctamente']);
    }

    public function buscar(Request $request)
    {
        $id = $request->id;

        $al = ModeloINEGI::select('id', 'raz_social', 'nombre_act', 'nom_vial')
            ->where('id', '=', $id)
            ->get();
        return $al;
    }


    public function obtieneApi($id)
    {
        $respuesta = $this->peticion('GET', "https://myapidsos.herokuapp.com/api/auth/black/{$id}");
        $datos = json_decode($respuesta);

        return response()->json($datos);
    }

    public function apiRegistra()
    {
        $respuesta = $this->peticion('POST', "https://myapidsos.herokuapp.com/api/auth/insertar", [
            'headers' => [
                'Content-Type' => 'application/x-www-form-urlencoded',
                'X-Requested-With' => 'XMLHttpRequest'
            ],
            'form_params' => [
                'raz_social' => 'LA FONDITA',
                'nombre_act' => 'LA FONDOTA',
                'nom_vial' => 'CALLE EL TEC'
            ]
        ]);
        $datos = json_decode($respuesta);

        return response()->json($datos);
    }

    public function apiActualiza($id)
    {
        $respuesta = $this->peticion('PUT', "https://myapidsos.herokuapp.com/api/auth/actualizar?id={$id}", [
            'headers' => [
                'Content-Type' => 'application/x-www-form-urlencoded',
                'X-Requested-With' => 'XMLHttpRequest'
            ],
            'form_params' => [
                'nombre_act' => 'Hola Mundo desde Heroku',
                'raz_social' => 'Ya exente la quinta y tercera y cuarta',
                'nom_vial' => 'Vamos a la calenda'
            ]
        ]);
        $datos = json_decode($respuesta);

        return response()->json($datos);
    }

    public function apiElimina($id)
    {
        $respuesta = $this->peticion('PUT', "https://myapidsos.herokuapp.com/api/auth/eliminar?id={$id}");
        $datos = json_decode($respuesta);

        return response()->json($datos);
    }

    public function apiBusca($id)
    {
        $respuesta = $this->peticion('GET', "https://myapidsos.herokuapp.com/api/auth/buscar?id={$id}");
        $datos = json_decode($respuesta);

        return response()->json($datos);
    }
}
