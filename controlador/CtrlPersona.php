<?php
session_start();
require_once './core/Controlador.php';
require_once './modelo/Persona.php';
class CtrlPersona extends Controlador{
    public function index(){
        $this->listar();
    }

    public function guardar(){
        $id=$_POST['id'];
        $nombre=$_POST['nombre'];
        
        $obj= new Estado($id, $nombre);

        if ($id==''){
            $respuesta = $obj->nuevo();
        } else {    # Editar
            $respuesta = $obj->editar();
        }
        
        $this->listar();
    }
    public function nuevo(){
        $this->mostrar('personas/formulario.php');
    }

    public function listar(){

        $obj= new Persona();

        $respuesta = $obj->listar();

        $msg = $respuesta['msg'];
        # var_dump($respuesta);exit;
        $datos = [
                'titulo'=>"Persona",
                'data'=>$respuesta['data']
            ];
        $contenido=$this->mostrar('personas/mostrar.php',$datos,true);
        $data = [
            'titulo'=>'Persona',
            'contenido'=>$contenido,
            'msg'=>$msg
        ];

        $this->mostrar('template.php',$data);

    }
    public function login(){
        echo "Validando ingreso....";
        
        $obj= new Persona();
        $data = $obj->validarLogin($_POST['email'],$_POST['clave']);
        if ($data['data']==null){
            echo "Usuario no encontrado";
        }else {
            # var_dump($data['data']);
            $_SESSION['usuario'] = $data['data'][0]['usuario'];
            $_SESSION['id'] = $data['data'][0]['idpersonas'];
            $_SESSION['nombre'] = $data['data'][0]['nombre']. ' '. $data['data'][0]['apellido'];

            header('location: ?ctrl=CtrlTrabajador&accion=validar&id='.$data['data'][0]['idpersonas']);
        }
        
    }
    public function logout(){
        session_destroy();
        header('location: ?');

    }
}