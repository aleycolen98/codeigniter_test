<?php 
namespace App\Models;

use CodeIgniter\Model;

class Operacion extends Model{
    protected $table      = 'alta_cliente';
    // Uncomment below if you want add primary key

    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre','apellido_paterno','apellido_materno','fecha_alta','fecha_actualizacion','numero_cliente'];


}