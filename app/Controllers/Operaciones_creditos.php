<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Credito;
use App\Models\Cuenta;

class Operaciones_creditos extends Controller{

    public function mostrar_form_creditos(){

        $model = new Cuenta();
        $datos['cuentas'] = $model->orderBy('id','ASC')->findAll();

        return view('operaciones/registrar_credito',$datos);
    }

    public function guardar_credito_endb(){

        $request = \Config\Services::request();

        $cuenta = $this->request->getVar('cuenta');
        $num_creditos = $this->request->getVar('numero_creditos');
        $mont_creditos = $this->request->getVar('monto_creditos');
        $mont_capital = $this->request->getVar('monto_capital');
        $mont_iva = $this->request->getVar('monto_iva');

            $data = [

                'id_cuenta'=> $cuenta,
                'numero_de_creditos'=> $num_creditos,
                'monto_credito'=> $mont_creditos,
                'monto_capital'=> $mont_capital,
                'monto_iva'=> $mont_iva
                ];
                
                $model = new Credito();
                $model->insert($data);

                return $this->response->redirect(site_url('/addcredito'));

    }
}