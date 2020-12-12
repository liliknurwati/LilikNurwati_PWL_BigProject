
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hot Drink</title>
  </head>
  <body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  <ul class="nav justify-content-left">
  <li class="nav-item">
    <a class="nav-link active" href="/satu">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/appetizer">APPETIZER</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/maincourse">MAIN COURSE</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/dessert">DESSERT</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/drink2">HOT DRINKS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/drink">COOL DRINKS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/review">REVIEW</a>
  </li>
</ul>
  </div>
  </nav>

  
<div class="jumbotron jumbotron-fluid" style="background-image: url(img/bigProject/bm.jpg); background-size: cover; height:250px; color:#ffffff;">
  <div class="container text-center">
  <br><br><br><br><br>
    <h1 class="display-4">Hot Drinks</h1>
    <p class="lead"></p>
  </div>
</div>
<div class="container">
<br><br>
<div class="row">
@foreach($hot as $h)
<div class="col-md">
<div class="card" style="width: 18rem;">
  <img src="{{ url('/UploadsMenu/'.$h->filenama) }}" class="card-img-top" width="200px" height="200px">
  <div class="card-body">
    <h5 class="card-title">{{$h->nama}}</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Harga : {{$h->harga}}</li>
    <li class="list-group-item">Stock : {{$h->stock}}</li>
  </ul>
</div>
</div>
@endforeach
</div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>