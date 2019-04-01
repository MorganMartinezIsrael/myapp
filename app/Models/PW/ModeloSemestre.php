<?php
/**
 * Created by PhpStorm.
 * User: charl
 * Date: 3/28/2019
 * Time: 10:32 AM
 */

namespace App\Models\PW;


use Illuminate\Database\Eloquent\Model;

class ModeloSemestre extends Model
{
    //aqui se declara el nombre de la tabla que esta en mysql
    protected $table = 'semestre';
    //Aqui el nombre de la llave primaria de la tabla
    protected $primarykey = 'id';

    public $timestamps = false;
    protected $fillable = [
        'id','semestre'
    ];

}