<?php


namespace App\Models\PW;

use Illuminate\Database\Eloquent\Model;

class ModeloAlumno extends Model{
    //aqui se declara el nombre de la tabla que esta en mysql
    protected $table = 'alumno';
    //Aqui el nombre de la llave primaria de la tabla
    protected $primarykey = 'id';
    
    public $timestamps = false;
    protected $fillable = [
        'id','nombre_completo','sexo'//, 'rfc', 'curp', 'fecha_registro','materia1', 'materia2', 'promedio'
    ];

    
//	public function getDateAttribute($value)
//	{
//	    return Carbon::createFromFormat('Y-m-d', $value)->format('d/m/Y');
//	}
//
//	public function setDateAttribute($value)
//	{
//	    $this->attributes['fecha_registro'] = Carbon::createFromFormat('d/m/Y', $value)->toDateString();
//	}

	
}
?>

