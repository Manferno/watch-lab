<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licencia extends Model
{
    use HasFactory;

    // Especifica el nombre de la tabla si es diferente del nombre del modelo en plural
    protected $table = 'licencias';

    // Define los campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
        'tipo',
        'descripcion',
        'fecha_vencimiento',
        'equipo_id', // Asegúrate de incluir este campo si tienes una relación con equipos
    ];

    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }
    public function equipos()
{
    return $this->belongsToMany(Equipo::class);
}
}