<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BMI</title>
    <style>
       table {
            width: 100%;
            background-color: antiquewhite;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td { 
            padding: 8px;
            text-align: left;
            font-weight: 700;
        }

        th {
            background-color: cyan;
        }
        .container-dedol {
          position: relative;
          width: 100%;
          height: 400px; /* Adjust the height as needed */
          background: url('gambar/timbangan1.jpg') center/cover no-repeat; /* Replace 'your-background-image.jpg' with your image path */
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
                <a class="nav-link active" aria aria-current="page" href="BMI">Kalkulator BMI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product">product</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
      <div>
        <div class="container-dedol">
          <div class="overlay"></div>
          <div class="text">
              <h1>Ayo Hidup Sehat</h1>
              <p>Additional information or description</p>
          </div>
      </div>

      <div class="container">
        
        <h2 class="text-center mt-4">Kalkulator BMI</h2>
        <form method="POST" action="/bmi">
            @csrf
            <div class="form-group">
                <label for="berat">Berat (dalam kilogram):</label>
                <input type="number" class="form-control" id="berat" name="berat" required>
            </div>
            <div class="form-group">
                <label for="tinggi">Tinggi (dalam sentimeter):</label>
                <input type="number" class="form-control" id="tinggi" name="tinggi" required>
            </div>
            <button type="submit" class="btn btn-primary">Hitung BMI</button>
        </form>
        @if(isset($bmi))
            <div class="alert alert-info mt-4">
                <strong>Hasil Perhitungan BMI:</strong> {{ $bmi }}
            </div>
            <div>
              <br>
              <h3>Golongan Berat Badan:</h3>
              <table>
                <thead>
                    <tr>
                        <th>BMI</th>
                        <th>STATUS BB</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Kurang dari 18.5</td>
                        <td style="color: red;">Underweight</td>
                    </tr>
                    <tr>
                      <td>18.5 - 24.9</td>
                      <td style="color: green;">Normal</td>
                    </tr>
                    <tr>
                      <td>25.0 - 29.9</td>
                      <td style="color: lime;">Overweight</td>
                    </tr>
                    <tr>
                      <td>Lebih Dari 30</td>
                      <td style="color: red;">Obese</td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
          </div>
        @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>