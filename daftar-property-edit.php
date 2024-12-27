<?= $this->extend('admin/template') ?>

<?= $this->section('main') ?>

<h2 class="mb-5">Edit Property</h2>

<form action="<?= base_url('admin/daftar-property/change/'.$property['id']); ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="nama">Nama Property</label>
            <input type="text" class="form-control" name="nama" id="nama" value="<?= $property['nama']; ?>"
            autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label for="jenis">Jenis</label>
            <input type="text" class="form-control" name="jenis" id="jenis"value="<?= $property['jenis']; ?>"
            autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label for="warna">Warna</label>
            <input type="text" class="form-control" name="warna" id="warna"value="<?= $property['warna']; ?>"
            autocomplete="off" required>
        </div>
        <div class="mb-3">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga"value="<?= $property['harga']; ?>"
            autocomplete="off" required>
        </div>
        <div class="mb-3">
        <label for="gambar" class="form-label">Gambar Property Baru Jika Mau</label>
        <input type="file" class="form-control" id="gambar" name="gambar" autocomplete="off">
        
    </div>
        <div class="mb-3">
            <label for="stok">Stok Property</label>
            <input type="text" class="form-control" name="stok" id="stok"value="<?= $property['stok']; ?>"
            autocomplete="off" required>
        </div>
        <div class="mb-3">
            <a href="<?= base_url('admin/daftar-property') ?>" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>

<?= $this->endSection()?>
