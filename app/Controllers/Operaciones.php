<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Operacion;

class Operaciones extends Controller{
        
    public function index(){

        return view('operaciones/añadir_cliente');
  
    }
    
    public function mostrar_datos(){

        $model = new Operacion();
        $datos['clientes'] = $model->orderBy('id','ASC')->findAll();
        return view('operaciones/datos_cliente',$datos);


    }


    public function insert(){
        
        $request = \Config\Services::request();

        $nombre = $this->request->getVar('nombre');
        $apellido_pat = $this->request->getVar('apellido_pat');
        $apellido_mat = $this->request->getVar('apellido_mat');
        $fecha_alt = $this->request->getVar('fecha_alta');
        $fecha_actua = $this->request->getVar('fecha_actua');
        $num_cliente = $this->request->getVar('num_cliente');

            $data = [

                'nombre'=> $nombre,
                'apellido_paterno'=> $apellido_pat,
                'apellido_materno'=> $apellido_mat,
                'fecha_alta'=> $fecha_alt,
                'fecha_actualizacion'=> $fecha_actua,
                'numero_cliente'=>$num_cliente
    
                ];
                
                $model = new Operacion();
                $model->insert($data);
                
        return $this->response->redirect(site_url('/clientes'));
    }
}