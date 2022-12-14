<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Cuenta;
use App\Models\Operacion;

class Operaciones_cuentas extends Controller{

    public function mostrar_cuentas(){

        $model2 = new Cuenta();
        $datos2['cuentas'] = $model2->orderBy('id','ASC')->findAll();

        return view('operaciones/datos_cuenta' ,$datos2);
        
    }


    public function add_cuenta(){

        $model = new Operacion();
        $datos['clientes'] = $model->orderBy('id','ASC')->findAll();


        return view('operaciones/registrar_cuenta',$datos);
    }

    public function guardar_cuenta_en_db(){


        $request = \Config\Services::request();

        $client = $this->request->getVar('client');
        $num_cuenta = $this->request->getVar('numero_cuenta');
        $tipo_cuenta = $this->request->getVar('tipo_cuenta');

            $data = [

                'id_cliente'=> $client,
                'numero_cuenta'=> $num_cuenta,
                'tipo_cuenta'=> $tipo_cuenta,
    
                ];
                
                $model = new Cuenta();
                $model->insert($data);
            
                return $this->response->redirect(site_url('/addcuenta'));
        
    }


    
}