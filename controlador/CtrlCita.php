<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Cita.php';
class CtrlCita extends Controlador
{
    public function index(){
        # $this->verificarLogin();
        $this->listar();
    }
    
    public function listar(){

        $obj= new Cita();

        $respuesta = $obj->getCitas();

        $msg = $respuesta['msg'];
        # var_dump($respuesta);exit;
        $datos = [
                'titulo'=>"Registro de dientes",
                'data'=>$respuesta['data']
            ];
        $contenido=$this->mostrar('citas/calendario.php',$datos,true);
        $data = [
            'titulo'=>'Registro de Citas',
            'contenido'=>$contenido,
            'data'=>$respuesta['data'],
            'msg'=>$msg
        ];

        $this->mostrar('template.php',$data);

    }
    /* private function verificarLogin(){
        if (!isset($_SESSION['usuario'])){
            header("Location: ?");
            exit();
        }
    } */
    public function reservarCita(){
        # var_dump($_POST);
        $obj = new Cita (
                null, $_POST['fecha_inicio'],
                $_SESSION['id'], $_POST['evento']);
        $obj->nuevo();
        
        $this->index();

    }
}