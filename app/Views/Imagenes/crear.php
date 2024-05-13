<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="card text-start">
    
    <div class="card-body">
        <h4 class="card-title">Ingresa tu imagen</h4>
        <p class="card-text">
        <form action="<?=site_url('/guardar')?>" method="POST" enctype="multipart/form-data" >
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" value="<?=old('nombre')?>" class="form-control" id="nombre" name="nombre">
    </div>
    <br>
    <div class="form-group">
        <label for="imagen">Imagen</label>
        <input type="file" class="form-control-file" id="imagen" name="imagen">
    </div>
    <br>
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="<?=base_url('listar')?>" class="btn btn-info" >Cancelar</a>
    <a href="<?=base_url('listar')?>" class="btn btn-info" >Galeria</a>
    <a href="<?=base_url('cerrarSesion')?>" class="btn btn-danger" >Salir</a>
        </p>
    </div>
</div>

    
</body>
</html>