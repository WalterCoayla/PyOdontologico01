-----------------------
CREATE VIEW v_personal
AS
SELECT
    personal.idpersonas,
    personal.colegiatura,
    personal.idtipo,
    tipo_personal.tipo
FROM personal
    INNER JOIN tipo_personal ON personal.idtipo = tipo_personal.idtipo
------------------------

create VIEW v_cita as
SELECT
    *,
    addtime(fecha, '00:30:00') as fin
FROM `citas`

-----------------------------
CREATE VIEW v_pacientes
AS
select
    `pe`.`idpersonas` AS `idpersonas`,
    `pe`.`nombre` AS `nombre`,
    `pe`.`apellido` AS `apellido`,
    `pe`.`dni` AS `dni`,
    `pe`.`direccion` AS `direccion`,
    `pe`.`fecha_nacimiento` AS `fecha_nacimiento`,
    `pe`.`telefono` AS `telefono`,
    `pe`.`correo` AS `correo`,
    `pe`.`usuario` AS `usuario`,
    `pe`.`clave` AS `clave`,
    `pe`.`fecha_alta` AS `fecha_alta`,
    `pe`.`estados_idestados` AS `estados_idestados`,
    `pe`.`idsexos` AS `idsexos`,
    `pa`.`idtipo_paciente` AS `idtipo_paciente`,
    `t`.`tipo` AS `tipo`,
    `s`.`nombre` AS `sexo`
from ( ( (
                `dental99`.`personas` `pe`
                join `dental99`.`paciente` `pa` on(
                    `pa`.`idpersonas` = `pe`.`idpersonas`
                )
            )
            join `dental99`.`tipo_paciente` `t` on(
                `pa`.`idtipo_paciente` = `t`.`idtipo_paciente`
            )
        )
        join `dental99`.`sexos` `s` on(`pe`.`idsexos` = `s`.`idsexos`)
    )

----------------------------
