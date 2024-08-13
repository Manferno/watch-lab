<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Equipo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'equipos';
    protected $primaryKey = 'id';
}