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
        $nom_estab = $request->nom_estab;
        ModeloINEGI::create(['nom_estab' => $nom_estab, 'raz_social' => $raz_social]);
        return response()->json(['mensaje' => 'Registrado correctamente']);
    }

    public function actualizar(Request $request)
    {
        $id = $request->id;
        $nom_estab = $request->nom_estab;
        $raz_social = $request->raz_social;

        $actualizar = ModeloINEGI::select('id', 'nom_estab', 'raz_social')
            ->where('id', $id)
            ->update(['nom_estab' => $nom_estab, 'raz_social' => $raz_social]);

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
        $nom_v_e_2 = $request->nom_v_e_2;

        $al = ModeloINEGI::select('id', 'raz_social', 'nombre_act', 'nom_vial')
            ->where('nom_v_e_2', $nom_v_e_2)
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
                'raz_social' => 'Bamby es ...'
            ]
        ]);
        $datos = json_decode($respuesta);

        return response()->json($datos);
    }

    public function apiActualiza($id)
    {
        $respuesta = $this->peticion('PUT', "https://myapidsos.herokuapp.com/api/auth/actualizar/{$id}", [
            'headers' => [
                'Content-Type' => 'application/x-www-form-urlencoded',
                'X-Requested-With' => 'XMLHttpRequest'
            ],
            'form_params' => [
                'nom_estab' => 'Hey daddy 2',
                'raz_social' => 'Johan no me folles'
            ]
        ]);
        $datos = json_decode($respuesta);

        return response()->json($datos);
    }

    public function apiElimina($id)
    {
        $respuesta = $this->peticion('PUT', "https://myapidsos.herokuapp.com/api/auth/eliminar/{$id}");
        $datos = json_decode($respuesta);

        return response()->json($datos);
    }

    public function apiBusca($nom)
    {
        $respuesta = $this->peticion(
            'GET',
            "https://myapidsos.herokuapp.com/api/auth/buscar/{$nom}"
        );
        $datos = json_decode($respuesta);

        return response()->json($datos);
    }
}
