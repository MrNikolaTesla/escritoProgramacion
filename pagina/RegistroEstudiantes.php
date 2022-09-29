
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devide-width, initial-scale=1.0">
    <title>Index no tan loco</title>
    <style>
.tablas-input{
        display: block;
  width: 25vw;
  padding: .375rem .75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  background-color: #fff;
  background-clip: padding-box;
  border: 2px solid #ced4da;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  border-radius: .375rem;
  transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}
</style>
</head>
<form class="col-4" method="POST">
                        <h3 class="text-center2">Registro de Estudiante</h3>
                        <?php require_once("../controlador/ControladorRegistroEstudiante.php"); ?>
                        <div class="mb-3">
                                <label class="form-label">Nombre/s y Apellido/s</label>
                                <input type="text" class="tablas-input" name="nombre">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Grupo</label>
                                <input type="text" class="tablas-input" name="grupo">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Notas</label>
                                <input type="text" class="tablas-input" name="notas">
                        </div>
                        <button type="submit" class="btn btn-primary" name="boton_registro" value="enviar">Enviar</button>
                        <p>
                                <!-- Boton de volver, se pueden llevar la "a" y la "/a" para reposicionarlo -->
                        </p>
                </form>
                <button class="button1"><a href="../GestionDeEstudiantes.php">Volver</a></button>
