<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Property</title>
    <link rel="stylesheet" href="/path/to/your/css/styles.css"> 
</head>
<body>
    <div class="container">
        <h1>Konfirmasi Hapus Property</h1>

        <?php if (isset($property)): ?>
            <p>Apakah Anda yakin ingin menghapus property dengan data berikut?</p>
            <ul>
                <li><strong>Nama:</strong> <?= htmlspecialchars($property['nama']); ?></li>
                <li><strong>Harga:</strong> Rp <?= number_format($property['harga'], 2, ',', '.'); ?></li>
                <li><strong>Stok:</strong> <?= htmlspecialchars($property['stok']); ?></li>
            </ul>

            <form action="/admin/daftar-property/hapus/<?= $property['id']; ?>" method="post">
                <?= csrf_field(); ?> 
                <button type="submit" class="btn btn-danger">Hapus</button>
                <a href="/admin/daftar-property" class="btn btn-secondary">Batal</a>
            </form>
        <?php else: ?>
            <p>Data Property tidak ditemukan.</p>
            <a href="/admin/daftar-property" class="btn btn-secondary">Kembali ke Daftar property</a>
        <?php endif; ?>
    </div>
</body>
</html>