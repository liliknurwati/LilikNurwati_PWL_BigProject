<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Register Employee</title>
  </head>
  <body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container">

  <ul class="nav justify-content-left">
  <li class="nav-item">
    <a class="nav-link active" href="/awaladmin">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/menuadmin">LIST MENU</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/reviewAdmin">REVIEW</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/register">ADD EMPLOYEE</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/addmenu">ADD FOODS AND DRINKS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/satu">LOGOUT</a>
  </li>
</ul>
  </div>
  </nav>

  </div>
  </nav>
<div class="cd" style="background-image: url('img/bigProject/dark.jpg');">
  <div class="container text-center">
  <br><br><br>
  <h1 style="color: white;">ADD EMPLOYEE</h1>
  <br>
  </div>
</div>
<div class="cr" style="background-color:#3E424B;">
    <div class="container">
    <br>
    @if(count($errors) > 0)
    <div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    {{ $error}} <br>
    @endforeach
    </div>
    @endif

    @if(\Session::has('success'))
        <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
        </div>
        @endif


    <br>
    <style type="text/css">
    .form-control{
      background:#3E424B;;
      width:550px;
      color:white;
    }
    label{
      color:white;
    }
    </style>
    <form action="/register/proses" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
                <label>Username</label>
            <input type="text" name= "username" class="form-control">  
            </div>
            <div class="form-group">
                <label>Passsword</label>
            <input type="password" name= "password" class="form-control">  
            </div>
            <div class="form-group">
                <label>Nama Lengkap</label>
            <input type="text" name= "namaLengkap" class="form-control">  
            </div>
            <div class="form-group">
                <label>Jabatan</label>
            <input type="text" name= "jabatan" class="form-control">  
            </div>
            <div class="form-group">
                <label>Alamat</label>
            <input type="text" name= "alamat" class="form-control">  
            </div>
            <div class="form-group">
                <label>No. Handphone</label>
            <input type="text" name= "noHandp" class="form-control">  
            </div>
            <div class="form-group">
                <label>Photo</label>
            <input type="file" name= "file" class="form-control border-0">  
            </div>
            <div class="form-group">
                <label>Status Pegawai</label>
            <input type="text" name= "status" class="form-control">  
            </div>
            <br>
            <button type="reset" style="width: 200px; background-color:red; border-radius:20px; color:#ffffff;" >
            Reset
            </button>
            <button type="submit" value="Upload" style="width: 200px; background-color:#000035; border-radius:20px; color:#ffffff;" >
            Add
            </button>
            <br>
            <br><br>

    </div>
    </form>
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