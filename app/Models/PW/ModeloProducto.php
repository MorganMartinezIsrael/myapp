<?php
/**
 * Created by PhpStorm.
 * User: charl
 * Date: 4/1/2019
 * Time: 4:17 PM
 */

namespace App\Models\PW;


use Illuminate\Database\Eloquent\Model;

class ModeloProducto extends Model
{
    //aqui se declara el nombre de la tabla que esta en mysql
    protected $table = 'producto';
    //Aqui el nombre de la llave primaria de la tabla
    protected $primarykey = 'id';

    public $timestamps = false;
    protected $fillable = [
        'id','nombre','tipo','proveedor','precio_unitario','precio_venta'
    ];

}