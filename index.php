<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Property Store</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?= base_url()?>css/style.css">
  </head>
  <body>
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-end">
          <a href="<?= base_url() ?>chart" class="btn btn-secondary">Keranjang Belanja <span class="badge text-bg-warning">4</span></a>
        </div>
      </div>
      <div class="row bg-primary-subtle mb-5">
        <div class="col-6 p-5">
          <h1>Selamat Datang di Property Store</h1>
          <p>Kami menyediakan berbagai macam property untuk segala kebutuhan Anda.</p>
          <a href="#" class="btn btn-success">Lihat Produk</a>
        </div>
        <div class="col-6 p-5">
          <h1>Temukan property favorit Anda!</h1>
          <form action="">
            <div class="mb-3">
              <input
                type="text"
                class="form-control"
                placeholder="Jenis Property"
              />
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Ukuran" />
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Warna" />
            </div>
            <div class="mb-3">
              <button class="btn btn-primary">Cari</button>
            </div>
          </form>
        </div>
      </div>

      <h2>Property Terlaris</h2>
      <div class="row mb-5 g-3">
        <div class="col-3">
          <div class="card">
            <img src="images/poto1.jpeg" class="card-img-top" alt="property 1" />
            <div class="card-body">
              <h5 class="card-title">Meja Tamu</h5>
              <p class="card-text">
                Rp 1.500,000,-
              </p>
              <a href="#" class="btn btn-primary">Add to Chart</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img src="images/poto2.jpeg" class="card-img-top" alt="property 2" />
            <div class="card-body">
              <h5 class="card-title">Kursi Tamu</h5>
              <p class="card-text">
                Rp 1.500,000,-
              </p>
              <a href="#" class="btn btn-primary">Add to Chart</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img src="images/poto3.webp" class="card-img-top" alt="property 3" />
            <div class="card-body">
              <h5 class="card-title">Lemari</h5>
              <p class="card-text">
                Rp 200,000,-
              </p>
              <a href="#" class="btn btn-primary">Add to Chart</a>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div class="card">
            <img src="images/poto4.jpeg" class="card-img-top" alt="property 4" />
            <div class="card-body">
              <h5 class="card-title">Springbed</h5>
              <p class="card-text">
                Rp 1.800,000,-
              </p>
              <a href="#" class="btn btn-primary">Add to Chart</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="bg-danger-subtle py-3">
      <div class="container">
        Copyright 2024. Property Store. All Rights Reserved.
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
