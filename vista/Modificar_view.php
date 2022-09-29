<form method="POST"> 
<h3 class="text-center">Modificacion de Estudiante</h3>
                <?php require_once("../controlador/ControladorModificarEstudiante.php"); ?>
                <?php foreach($estudiante_modificar as $estudiante){ ?>
                <div class="mb-3">
                        <label class="form-label">Id</label>
                        <input type="text" class="form-control" name="id" value="<?php echo $estudiante['id'] ?>" readonly>
                </div>
                <div class="mb-3">
                        <label class="form-label">Nombre/s y Apellido/s</label>
                        <input type="text" class="form-control" name="nombre" value="<?php echo $estudiante['nombre'] ?>">
                </div>
                <div class="mb-3">
                        <label class="form-label">Grupo</label>
                        <input type="text" class="form-control" name="grupo" value="<?php echo $estudiante['grupo'] ?>">
                </div>
                <div class="mb-3">
                        <label class="form-label">Notas</label>
                        <input type="text" class="form-control" name="notas" value="<?php echo $estudiante['notas'] ?>">
                </div>
                <?php } ?>
                <button type="submit" class="btn btn-primary" name="modificacion" value="enviar">Modificar</button>
                </form>