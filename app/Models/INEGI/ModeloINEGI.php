<?php


namespace App\Models\INEGI;


use Illuminate\Database\Eloquent\Model;

class ModeloINEGI extends Model
{
    //aqui se declara el nombre de la tabla que esta en mysql
    protected $table = 'inegi';
    //Aqui el nombre de la llave primaria de la tabla
    protected $primarykey = 'id';

    public $timestamps = false;
    protected $fillable = [
        'id','nom_estab', 'raz_social', 'codigo_act', 'nombre_act','per_ocu','tipo_v_e_1','nom_v_e_1','tipo_v_e_2','nom_v_e_2','tipo_v_e_3','nom_v_e_3','numero_ext','letra_ext'
    ];


}