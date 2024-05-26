<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REST API</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1><?php echo "Hello, world!" ?></h1>
    <div class="container">
        <form>
            <div class="d-flex">
                <div class="mb-3">
                    <label for="txt_fecha_inicio" class="form-label">Fecha Inicio</label>
                    <input type="date" class="form-control" id="txt_fecha_inicio" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="txt_fecha_fin" class="form-label">Fecha Fin</label>
                    <input type="date" class="form-control" id="txt_fecha_fin">
                </div>
            </div>
            <button type="button" class="btn btn-primary" onclick="main()">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <!--MI SCRIPT-->
    <script src="./main.js"></script>
</body>

</html>