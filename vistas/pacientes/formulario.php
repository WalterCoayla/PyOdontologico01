<?php
    $id = isset ($data['idpersonas'])?$data['idpersonas']:"";
    $nombre = isset ($data['nombre'])?$data['nombre']:"";
    $apellido = isset ($data['apellido'])?$data['apellido']:"";
    $dni = isset ($data['dni'])?$data['dni']:"";
    $direccion = isset ($data['direccion'])?$data['direccion']:"";
    $fechanac = isset ($data['fecha_nacimiento'])?$data['fecha_nacimiento']:"";
    $telefono = isset ($data['telefono'])?$data['telefono']:"";
    $correo = isset ($data['correo'])?$data['correo']:"";
    $usuario = isset ($data['usuario'])?$data['usuario']:"";
   /*  $clave = isset ($data['clave'])?$data['clave']:""; */

$editar = ($id != '')?1:0;  # 1: Editar / 0: Nuevo

# $titulo = ($editar==1)?'Editar Estado':'Nuevo Estado';

?>
<style>
    .titulo{
        color: black;
    }
</style>
    
    <form action="?ctrl=CtrlPaciente&accion=guardar" method="post">
        id: <input class="form-control" type="text" name="id" value="<?=$id?>" readonly>
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar por DNI..."
                aria-label="Search" aria-describedby="basic-addon2" id="txtBuscar">
            <div class="input-group-append">
                <button class="btn btn-success" type="submit">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                Nombre: 
                <input class="form-control" type="text" name="nombre" value="<?=$nombre?>" >
            </div>
            <div class="col">
                Apellido: 
                <input class="form-control" type="text" name="apellido" value="<?=$apellido?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                Dni:
                <input type="text" class="form-control" name="dni" value="<?=$dni?>" >
            </div>
            <div class="col">
                Direccion: 
                <input type="text" class="form-control" name="direccion" value="<?=$direccion?>"> 
            </div>
        </div>
        <div class="row">
            <div class="col">
            <br>    
            Tipo <br>
                <input type="radio" name="tipo" value='1' > Niño <br>
                <input type="radio" name="tipo" value='2' > Adulto <br>
            </div>
        </div>
        <br>
        
        <a class="btn btn-success col-5 mx-auto" type="submit" value="Guardar"> 
            <i class="fa-solid fa-floppy-disk"></i> Guardar</a>
          
        <a class="btn btn-danger col-5 mx-auto" href="" type="submit" value="AgregarPaciente"> 
            <i class="fa fa-plus-circle "> </i> Agregar Paciente  </a>
        
        <!--<input class=" btn btn-success " type="submit" value="Guardar">
        <input class=" btn btn-success" type="submit" value="Guardar">-->
    </form>


    <a class="titulo" href="?ctrl=CtrlTrabajador">Retornar</a>
