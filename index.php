<?php include 'covid.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>COVID19</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Data Covid Dunia</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Kasus Global</a>
        </li>
        </ul>
    </div>
    </nav>
    
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1 class="text-center mt-5">Data Covid-19 Indonesia</h1>
        
            <hr/>
            <div class="row mt-5 mb-5"> 
                <div class="col-sm-4">
                    <div class="card text-white bg-warning">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5 class="card-title">TOTAL POSITIF</h5>
                                <H1><?= $positif;?></H1>
                                <p class="card-text">ORANG</p>
                            </div>
                            <div class="col-md-4">
                                <img src="img/sehat.png" alt="" heigth="100" width="100">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-black bg-secondary">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5 class="card-title">TOTAL SEMBUH</h5>
                                <H1><?= $sembuh;?></H1>
                                <p class="card-text">ORANG</p>
                            </div>
                            <div class="col-md-4">
                                <img src="img/sakit.png" alt="" heigth="100" width="100">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-white bg-dark">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <h5 class="card-title">TOTAL MENINGGAL</h5>
                                <H1><?= $meninggal;?></H1>
                                <p class="card-text">ORANG</p>
                            </div>
                            <div class="col-md-4">
                                <img src="img/nisan.png" alt="" heigth="100" width="100">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>