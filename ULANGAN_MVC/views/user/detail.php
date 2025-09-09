<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<body class="container mt-4">
    <h2>Detail Film</h2>
<?php if ($user): ?>
        <table class="table table-bordered">
            <tr><th>ID</th><td><?= $user['id'] ?></td></tr>
            <tr><th>Nama Film</th><td><?= $user['nama_film'] ?></td></tr>
            <tr><th>Sinopsis</th><td><?= $user['sinopsis_film'] ?></td></tr>
            <tr><th>Rumah Produksi</th><td><?= $user['production_house'] ?></td></tr>
        </table>
        <a href="index.php" class="btn btn-primary">Kembali</a>
    <?php else: ?>
        <div class="alert alert-danger">Data tidak ditemukan.</div>
    <?php endif; ?>




</table>
    










<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>