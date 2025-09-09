<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KATALOG FILM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4 text-center">Daftar Film</h2>
    <div class="card shadow-sm">
      <div class="card-body">
        <table class="table table-striped table-hover">
          <thead class="table-primary">
            <tr>
              <th>ID</th>
              <th>Nama Film</th>
              <th>Sinopsis</th>
              <th>Rumah Produksi</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $user): ?>
                 <tr>
                 <td><?= $user['id'] ?></td>
                 <td><?= $user['nama_film'] ?></td>
                 <td><?= $user['sinopsis_film'] ?></td>
                 <td><?= $user['production_house'] ?></td>
                 </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>