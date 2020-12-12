<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

    <title>Halaman Utama</title>
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
  <li class="nav-item">
    <a class="nav-link" data-toggle="modal" data-target="#exampleModal">ADMIN</a>
  </li>
</ul>
  </div>
  </nav>

  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/bigProject/pic.jpg" class="d-block w-100" alt="image" height="570px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Selamat Datang di Web Creation Restaurant</h5>
        <p>Anda bisa menggunakan berbagai fitur yang tersedia di Web ini</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/bigProject/rrr.jpg" class="d-block w-100" alt="image" height="570px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Selamat Datang di Web Creation Restaurant</h5>
        <p>Anda bisa melihat berbagai menu yang tersedia di Creation Restaurant ini.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/bigProject/ddd.jpg" class="d-block w-100" alt="image" height="570px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Selamat Datang di Web Creation Restaurant</h5>
        <p>Anda bisa memberikan review terkait Creation Restaurant ini</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


  <!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <h4 class="text-center">LOGIN ADMIN</h4>
        <hr>
        <form action="{{ url('/satu/login') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
        <label>Username</label>
        <div class="input-group">
        <div class="input-group-prepend">
        <div class="input-group-text"><i class="fas fa-user"></i></div>
        </div>
        <input type="text" name="username" class="form-control" placeholder="Masukkan Username Anda">
        @if($errors->has('username'))
        <label style="color:red" class="login-field-icon fui-user" for="login-name">username jangan kosong</label>
        @endif
        </div>
        

        <div class="form-group">
        <label>Password</label>
        <div class="input-group">
        <div class="input-group-prepend">
        <div class="input-group-text"><i class="fas fa-lock"></i></div>
        </div>
        <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda">
        @if($errors->has('password'))
        <label style="color:red" class="login-field-icon fui-user" for="login-name">username jangan kosong</label>
        @endif
        </div>
    
        </div>
          <button type="reset" class="btn btn-danger" style="width:49%;">Reset</button>
            <button type="submit" class="btn btn-primary" style="width:49%;">Login</button>
            @if(Session::has('failed'))
        <p style="color:red;">username dan password salah</p>
        @endif
        
        
            
            <!--btn btn-primary digunakan untuk warna tombol, primary berwarna biru -->
        </form>
    </div>
      </div>
      
    </div>
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