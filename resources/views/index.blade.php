<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hidup Sehat</title>
    <style>
        .container-dedol {
            position: relative;
            width: 100%;
            height: 400px; /* Adjust the height as needed */
            background: url('gambar/dedol.jpg') center/cover no-repeat; /* Replace 'your-background-image.jpg' with your image path */
            color: #fff;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Adjust the background color and transparency as needed */
        }

        .text {
            z-index: 1;
            color: #fff;
            font-size: 24px;
            font-weight: bold;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-image: url({{asset('gambar/background.jpg')}})">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" >Hidup Sehat</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav" >
                <a class="nav-link" href="#">Artikel</a>
                <a class="nav-link" href="#">Berita</a>
                <a class="nav-link" href="#">Video</a>
                <a class="nav-link" href="#">Kalkulator BMI</a>
                <form class="d-flex ">
                    <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit" style="margin-right: 22rem;">Cari</button>
                    <a href="login" class="btn btn-outline-danger">Login</a>
                </form>
            </div>
        </div>
    </div>
</nav>

<div class="container-dedol">
    <div class="overlay"></div>
    <div class="text">
        <h1>Your Text Goes Here</h1>
        <p>Additional information or description</p>
    </div>
</div>

<div class="container" >
    <h1>Hidup Sehat</h1>
    <p>Hidup sehat adalah kunci untuk hidup yang bahagia dan sejahtera. Dengan menjalani pola hidup sehat, kita dapat terhindar dari berbagai penyakit dan meningkatkan kualitas hidup.</p>
    <p>Berikut adalah beberapa tips untuk menjalani pola hidup sehat:</p>
    <ul>
        <li>Makan makanan yang bergizi</li>
        <li>Olahraga secara teratur</li>
        <li>Tidur yang cukup</li>
        <li>Hindari stres</li>
    </ul>

    <h2>Artikel</h2>
    <div class="row">
        <div class="col-md-4">
            <h3><a href="artikel">Manfaat Olahraga untuk Kesehatan Mental</a></h3>
            <p>Olahraga tidak hanya bermanfaat untuk kesehatan fisik, tetapi juga kesehatan mental. Olahraga dapat membantu mengurangi stres, meningkatkan mood, dan meningkatkan kualitas tidur.</p>
        </div>
        <div class="col-md-4">
            <h3><a href="">Tips Diet untuk Mencegah ObesitasQQ2</a></h3>
            <p>Obesitas adalah salah satu faktor risiko utama berbagai penyakit kronis, seperti penyakit jantung, stroke, dan diabetes. Untuk mencegah obesitas, kita perlu menerapkan pola makan yang sehat dan seimbang.</p>
        </div>
        <div class="col-md-4">
            <h3>Cara Meningkatkan Kekebalan Tubuh</h3>
            Kekebalan tubuh yang kuat dapat membantu kita melawan berbagai penyakit. Untuk meningkatkan kekebalan tubuh, kita perlu mengonsumsi makanan yang bergizi, berolahraga secara teratur, dan cukup tidur.
        </div>
    </div>

    <h2><a href="berita">Berita</a></h2>
    <div class="card">
        <div class="card-header">
            <h4>Studi: Olahraga Bisa Meningkatkan Kemampuan Kognitif</h4>
        </div>
        <div class="card-body">
            <p>Sebuah studi terbaru yang diterbitkan dalam jurnal Nature Medicine menemukan bahwa olahraga dapat meningkatkan kemampuan kognitif, termasuk memori, perhatian, dan pengambilan keputusan.</p>
            <p>Studi tersebut dilakukan terhadap 1.200 orang dewasa berusia 55 tahun ke atas. Para peserta dibagi menjadi dua kelompok, yaitu kelompok yang berolahraga secara teratur dan kelompok yang tidak berolahraga.</p>
            <p>Hasil studi menunjukkan bahwa kelompok yang berolahraga secara teratur memiliki kemampuan kognitif yang lebih baik daripada kelompok yang tidak berolahraga
