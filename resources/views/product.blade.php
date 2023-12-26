<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>product</title>
    <style>
      .container {
          max-width: 800px; /* Adjust the maximum width as needed */
          margin: 0 auto; /* Center the container */
          padding: 20px; /* Add padding inside the container */
          border: 1px solid #ddd; /* Add a border around the container */
          border-radius: 8px; /* Optional: Add border-radius for rounded corners */
          background-color: #fff; /* Optional: Add background color */
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Optional: Add box shadow for depth */
      }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body style="background-image: url({{asset('gambar/background.jpg')}})">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Ayo Sehat</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="artikel">Artikel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="video">Video</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="BMI">Kalkulator BMI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="product">product</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
      <h2>Artikel</h2>
        <div class="row">
          <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
              <img src="gambar/KurangMinum.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Bahaya Kurang Minum Air Putih, Dehidrasi sampai Picu Penyakit Kronis</h5>
                <p class="card-text">Seorang perempuan 20 tahun asal Taiwan menjalani operasi 300 batu ginjal yang harus dikeluarkan dari tubuhnya. 
                   Rupanya ia gemar minum teh boba atau minuman teh susu dengan tambahan bola-bola tapioka,
                   ditambah konsumsi air putihnya sangat kurang.</p>
                <a href="https://www.cnnindonesia.com/gaya-hidup/20231219201647-255-1039403/bahaya-kurang-minum-air-putih-dehidrasi-sampai-picu-penyakit-kronis" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <img src="gambar/5Minuman.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">5 Minuman Untuk Menghilangkan Perut Buncit, BB Auto Turun Drastis!</h5>
                <p class="card-text">Minuman untuk menghilangkan perut buncit bisa menjadi salah satu pilihan menurunkan berat badan secara alami.
                   Biasanya,
                   minuman-minuman ini kerap dikonsumsi setelah bangun tidur di pagi hari untuk membantu melancarkan sistem pencernaan.</p>
                <a href="https://health.detik.com/berita-detikhealth/d-7098666/5-minuman-untuk-menghilangkan-perut-buncit-bb-auto-turun-drastis" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>