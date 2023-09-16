<?php
$id = isset ($data['idsexos'])?$data['idsexos']:"";
$estado = isset ($data['nombre'])?$data['nombre']:"";

$editar = ($id != '')?1:0;  # 1: Editar / 0: Nuevo

# $titulo = ($editar==1)?'Editar Estado':'Nuevo Estado';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Registro de Personal</title>
    <link rel="stylesheet" href="./vistas/personas/registro.css">
</head>
<body>
    <div class="contenedor1">
        <header>Registro</header>
        <form action="">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Datos Personales</span>
                    
                    <div class="fields">
                        <div class="input-field">
                            <label for="">Nombre </label>
                            <input type="text" placeholder="Ingresar Nombre.....">
                        </div>
                        <div class="input-field">
                            <label for="">Apellido</label>
                            <input type="text" placeholder="Ingresar Apellido.....">
                        </div>
                        <div class="input-field">
                            <label for="">Dni</label>
                            <input type="text" placeholder="Ingresar Dni.....">
                        </div>
                        <div class="input-field">
                            <label for="">Direccion</label>
                            <input type="text" placeholder="Ingresar Direccion.....">
                        </div>
                        <div class="input-field">
                            <label for="">fecha de Cumpleaños</label>
                            <input type="date" placeholder="ingrese cumpleaños">
                        </div>
                        <div class="input-field">
                            <label for="">Sexo</label>
                            <input type="text" placeholder="Ingresar.....">
                        </div>
                        <div class="input-field">
                            <label for="">Telefono</label>
                            <input type="number" placeholder="Ingresar Telefono.....">
                        </div>
                    </div>
                </div>
            </div>
            <div class="forms first">
                <div class="details personal">
                    <span class="title">ID Personales</span>
                    
                    <div class="fields">
                        <div class="input-field">
                            <label for="">Correo</label>
                            <input type="email" placeholder="Ingresar el correo..">
                        </div>  
                        <div class="input-field">
                            <label for="">Usuario</label>
                            <input type="text" placeholder="Ingresar Usuario.....">
                        </div>
                        <div class="input-field">
                            <label for="">Clave</label>
                            <input type="text" placeholder="Ingresar Clave..">
                        </div>  
                        <div class="input-field">
                            <label for="">fecha de Alta</label>
                            <input type="date" placeholder="ingrese su fecha">
                        </div>
                        <div class="input-field">
                            <label for="">Estado</label>
                            <input type="text" placeholder="Ingresar estado..">
                        </div> 
                        <div class="input-field">
                            <label for="">Registrado Por</label>
                            <input type="text" placeholder="Ingristrado Por.....">
                        </div>
                    </div>
                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil iul-navigator"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
