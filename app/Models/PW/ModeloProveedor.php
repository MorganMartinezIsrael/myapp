<?php
/**
 * Created by PhpStorm.
 * User: charl
 * Date: 4/1/2019
 * Time: 6:36 PM
 */

namespace App\Models\PW;


use Illuminate\Database\Eloquent\Model;

class ModeloProveedor extends Model
{
    //aqui se declara el nombre de la tabla que esta en mysql
    protected $table = 'tienda';
    //Aqui el nombre de la llave primaria de la tabla
    protected $primarykey = 'id';

    public $timestamps = false;
    protected $fillable = [
        'id','razon_social','rfc','direccion_fiscal','apoderado_fiscal','telefono'
    ];

}