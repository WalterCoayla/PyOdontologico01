<?php
$id = isset ($data['iddiente'])?$data['iddiente']:"";
$ubicacion = isset ($data['ubicacion'])?$data['ubicacion']:"";
$diente = isset ($data['nombre'])?$data['nombre']:"";

$editar = ($id != '')?1:0;  # 1: Editar / 0: Nuevo

# $titulo = ($editar==1)?'Editar Estado':'Nuevo Estado';

?>
    
    <form action="?ctrl=CtrlDiente&accion=guardar" method="post">
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
                <input class="form-control" type="text" name="nombre" value="<?=$diente?>">
            </div>
            <div class="col">
                Apellido: 
                <input class="form-control" type="text" name="nombre" value="<?=$diente?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                Edad:
                <input type="text" class="form-control" aria-label="Nombre">
            </div>
            <div class="col">
                Nº Telefono: 
                <input type="text" class="form-control" placeholder="+51.." aria-label="Apellido">
            </div>
        </div>
        <div class="row">
            <div class="col">
                Sexo: 
                <input class="form-control" type="text" name="nombre" value="<?=$diente?>">
            </div>
            <div class="col">
                Direccion: 
                <input class="form-control" type="text" name="nombre" value="<?=$diente?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                Enfermedad: 
                <input class="form-control" type="text" name="nombre" value="<?=$diente?>">
            </div>
            <div class="col">
                Alergias: 
                <input class="form-control" type="text" name="nombre" value="<?=$diente?>">
            </div>
        </div>
        <div class="row">
            <div class="col">
                Sensibilidad-Medicamentos: 
                <input class="form-control" type="text" name="nombre" value="<?=$diente?>">
            </div>
            <div class="col">
                <br>
                Presión: 
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                    <label class="form-check-label" for="inlineCheckbox1">A</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">B</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                    <label class="form-check-label" for="inlineCheckbox2">N</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                Gestación: 
                <input class="form-control" type="text" name="nombre" value="<?=$diente?>">
            </div>
            <div class="col">
                Temperatura: 
                <input class="form-control" type="text" name="nombre" value="<?=$diente?>">
            </div>
        </div>
        <br>
        <input class="form-control btn btn-success" type="submit" value="Guardar">
    </form>

    <a href="?ctrl=CtrlTrabajador">Retornar</a>
