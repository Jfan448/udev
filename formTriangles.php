<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clasificador de Triángulos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="mb-4">Clasificador de Triángulos</h2>
        <form method="post">
          <div class="form-group">
            <label for="lado1">Lado 1:</label>
            <input type="number" class="form-control" id="lado1" name="lado1" required>
          </div>
          <div class="form-group">
            <label for="lado2">Lado 2:</label>
            <input type="number" class="form-control" id="lado2" name="lado2" required>
          </div>
          <div class="form-group">
            <label for="lado3">Lado 3:</label>
            <input type="number" class="form-control" id="lado3" name="lado3" required>
          </div>
          <div class="form-group">
            <label for="clasificacion">Clasificación:</label>
            <input type="text" class="form-control" id="clasificacion" name="clasificacion" readonly>
          </div>
          <button type="submit" class="btn btn-primary">Clasificar</button>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
