<?php
/**
 * Created by PhpStorm.
 * User: charl
 * Date: 3/28/2019
 * Time: 11:33 AM
 */

namespace App\Models\PW;


use Illuminate\Database\Eloquent\Model;

class ModeloEstudiante extends Model
{
    //aqui se declara el nombre de la tabla que esta en mysql
    protected $table = 'estudiante';
    //Aqui el nombre de la llave primaria de la tabla
    protected $primarykey = 'id';

    public $timestamps = false;
    protected $fillable = [
        'id','nombre','n_control','semestre','materia'
    ];
}