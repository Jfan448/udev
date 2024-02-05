<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <h2>Calculadora</h2>
    <form>
      <div class="form-group">
        <label for="primer_valor">Primer valor:</label>
        <input type="number" class="form-control" id="primer_valor" name="primer_valor" required>
      </div>
      <div class="form-group">
        <label for="segundo_valor">Segundo valor:</label>
        <input type="number" class="form-control" id="segundo_valor" name="segundo_valor" required>
      </div>
      <div class="form-group">
        <label for="resultado">Resultado:</label>
        <input type="text" class="form-control" id="resultado" name="resultado" readonly>
      </div>
      <button type="button" class="btn btn-primary">Suma</button>
      <button type="button" class="btn btn-primary">Resta</button>
      <button type="button" class="btn btn-primary">Multiplicación</button>
      <button type="button" class="btn btn-primary">División</button>
    </form>
  </div>
</body>
</html>
