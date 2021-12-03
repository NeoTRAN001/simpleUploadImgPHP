<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <form name="MyForm" id="MyForm" method="post" action="load.php" enctype="multipart/form-data">
        <h4 class="text-center">Seleccione imagen a cargar</h4>
        <div class="form-group">
            <label class="col-sm-2 control-label">Archivos</label>
            <div class="col-sm-8">
                <input type="file" class="form-control" id="image" name="image" multiple>
            </div>
            <br />
            <button name="submit" class="btn btn-primary">Cargar Imagen</button>
        </div>
    </form>
</body>
</html>