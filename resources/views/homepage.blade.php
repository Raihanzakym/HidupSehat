<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage Hidup Sehat</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-red">
    <div class="container">
        <a class="navbar-brand" href="#">Homepage Hidup Sehat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Video</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kalkulator BMI</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Artikel</h1>
            <ul>
                <li>
                    <a href="#">Judul Artikel 1</a>
                </li>
                <li>
                    <a href="#">Judul Artikel 2</a>
                </li>
                <li>
                    <a href="#">Judul Artikel 3</a>
                </li>
            </ul>
        </div>
        <div class="col-md-4">
            <h1>Berita</h1>
            <ul>
                <li>
                    <a href="#">Judul Berita 1</a>
                </li>
                <li>
                    <a href="#">Judul Berita 2</a>
                </li>
                <li>
                    <a href="#">Judul Berita 3</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
