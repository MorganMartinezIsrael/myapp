<?php
/**
 * Created by PhpStorm.
 * User: charl
 * Date: 3/25/2019
 * Time: 4:51 PM
 */

namespace App\Models\PW;


use Illuminate\Database\Eloquent\Model;

class ModeloSexo extends Model
{
    //aqui se declara el nombre de la tabla que esta en mysql
    protected $table = 'sexo';
    //Aqui el nombre de la llave primaria de la tabla
    protected $primarykey = 'id';

    public $timestamps = false;
    protected $fillable = [
        'id','sexo'
    ];



}