<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kodigo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Bienvenido a la Kodigo App</h1>
    <h2 class="text-center">Todos los Bootcamps: </h2>

    <div class="container">
        <div class="row">
            <!-- Lista de Bootcamps -->
            <?php foreach($bootcamps as $bootcamp): ?>
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem;">
                        <!-- Imagenes de Bootcamp -->
                        <img src="https://www.codigoonclick.com/wp-content/uploads/2018/02/mejores-lenguajes-de-programacion-2018.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $bootcamp['title']?></h5>
                            <p class="card-text"><?php echo $bootcamp['description']?></p>
                            <a href="#" class="btn btn-primary">Leer más</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>