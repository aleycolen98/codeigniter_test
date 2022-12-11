<?php 
namespace App\Models;

use CodeIgniter\Model;

class Credito extends Model{
    protected $table      = 'creditos';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_cuenta','numero_de_creditos','monto_credito','monto_capital','monto_iva'];
}