<h1><?=$titulo?></h1>
<?php require_once './vistas/plantilla/dashboard.php'; ?>
<a href="#" class="btn btn-success nuevo">
    <i class="fa fa-plus-circle"></i> 
    Nuevo Registro
</a>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="#" class="btn btn-success reporte">
        <i class="fas fa-download fa-sm text-white-50"></i> 
        Generar Reportes XLSX
    </a>
    <H1> </H1>
    <a href="#" class="btn btn-danger reporte">
        <i class="fas fa-download fa-sm text-white-50"></i> 
        Descarga PDF
    </a>
</div>

<br>

<table class="table table-striped table-hover">
    <tr>
        <th>Id</th>
        <th>Fecha de Atención</th>
        <th>Observaciones</th>
        <th>Dato del Paciente</th>
        <th>Atendido Por.</th>
        <th>Estado</th>

        <th colspan="3"><center>Opciones</center></th>
    </tr>
<?php
    if (is_array($data))
    foreach ($data as $d) { ?>
    <tr>
        <td><?=$d['idhistorias_clinicas']?></td>
        <td><?=$d['fecha']?></td>
        <td><?=$d['observaciones']?></td>
        <td><?=$d['idpersonas']?></td>
        <td><?=$d['idpersonas1']?></td>
        <td>Pendiente</td>


        <td>
            <a data-id="<?=$d["idhistorias_clinicas"]?>" class="editar" href="#">
                <i class="bi bi-pencil-square"></i> Editar </a>
            / 
            <a data-id="<?=$d["idhistorias_clinicas"]?>" data-nombre="<?=$d["nombre"]?>" class="eliminar" href="#">
                <i class="bi bi-trash"></i> Eliminar </a>
            /
            <a data-id="<?=$d["idhistorias_clinicas"]?>" data-nombre="<?=$d["nombre"]?>" class="eliminar" href="#">
                <i class="bi bi-trash"></i> Enviar </a>
            </td>
        
    </tr>

<?php    }
?>
    

</table>
<br>
<a href="?">Retornar</a>

<!-- Modal Formulario - Nuevo / Editar -->
<div class="modal fade" id="modal-form" role="dialog">
<div class="modal-dialog">

 <!-- Modal content-->
 <div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body" id="body-form">

    </div>
    
 </div>
</div>
</div>
<!-- Modal Eliminar -->
<div class="modal fade" id="modal-eliminar" role="dialog">
<div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="frm-eliminar"></h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" id="body-eliminar">
            <div class="text-center">
                <h5>¿Estas seguro que deseas seguir con la eliminación?</h5>
                <h5 class="reg-eliminacion">Registro: </h5>
            </div>
        </div>
        <div class="modal-footer justify-content-between">            
            <button type="button" class="btn btn-secundary" data-dismiss="modal">Cancelar</button>
            <a type="button" class="btn btn-danger" id="btn-confirmar" href="" data-id="">Eliminar</a>
        </div>
    </div>
</div>
</div>