<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

 
class Equipo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'equipos';
    protected $primaryKey = 'id';

    public function licencias()
    {
        return $this->hasMany(Licencia::class);
    }

    use HasFactory;
    // Define los campos que se pueden llenar
    protected $fillable = ['nombre', 'estado', 'marca', 'numero_serie', 'modelo', 'fecha_adquisicion', 'ubicacion'];

}