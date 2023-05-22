<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Cursos</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Formulario de Informacion Cursos</h1>
        <div class="row justify-content-center">
            <form action="/ParcialReyesSoto/controladores/productos/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
                <div class="row mb-3">
                    <div class="col">
                        <label for="nombre_curso">Nombre del Curso</label>
                        <input type="text" name="nombre_curso" id="nombre_curso" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="cantidad_periodos">Cantidad de Periodos</label>
                        <input type="number" name="cantidad_periodos" id="cantidad_periodos" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="modulo_impartido">Modulo en que se imparte</label>
                        <input type="number" name="modulo_impartido" id="modulo_impartido" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="nombre_instructor">Nombres del Instructor encargado</label>
                        <input type="text" name="nombre_instructor" id="nombre_instructor" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="creditos_curso">creditos curso</label>
                        <input type="number" name="creditos_curso" id="creditos_curso" class="form-control">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>