<?php
/**
 * Created by PhpStorm.
 * User: charl
 * Date: 3/14/2019
 * Time: 4:17 PM
 */

namespace App\Models\Ferreteria;


use Illuminate\Database\Eloquent\Model;

class ModeloFerreteria extends Model
{
    //aqui se declara el nombre de la tabla que esta en mysql
    protected $table = 'ferreteria';
    //Aqui el nombre de la llave primaria de la tabla
    protected $primarykey = 'id';

    public $timestamps = false;
    protected $fillable = [
        'id','nombre_empresa', 'nombre_dueno', 'direccion_dueno', 'rfc','fecha_registro', 'bandera'
    ];


    public function getDateAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d', $value)->format('d/m/Y');
    }

    public function setDateAttribute($value)
    {
        $this->attributes['fecha_registro'] = Carbon::createFromFormat('d/m/Y', $value)->toDateString();
    }
}