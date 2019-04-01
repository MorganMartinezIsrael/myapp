<?php
/**
 * Created by PhpStorm.
 * User: charl
 * Date: 3/28/2019
 * Time: 10:30 AM
 */

namespace App\Models\PW;


use Illuminate\Database\Eloquent\Model;

class ModeloMateria extends Model
{
    //aqui se declara el nombre de la tabla que esta en mysql
    protected $table = 'materia';
    //Aqui el nombre de la llave primaria de la tabla
    protected $primarykey = 'id';

    public $timestamps = false;
    protected $fillable = [
        'id','nombre','semestre','materia'
    ];

}