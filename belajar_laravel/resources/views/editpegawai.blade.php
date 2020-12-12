<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Edit Employee</title>
  </head>
  <body>
  
  </div>
  </nav>
<div class="cd" style="background-color:black;">
  <div class="container text-center">
  <br>
  <h1 style="color: white;">EDIT EMPLOYEE</h1>
  <br>
  </div>
    <div class="container">
    <style type="text/css">
    .form-control{
      background:transparent;;
      width:550px;
      color:white;
    }
    label{
      color:white;
    }
    </style>
    @foreach($halawaladmin as $a)
    <form action="/awaladmin/update" method="post">
    {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $a->id }}"><br>
            <div class="form-group">
                <label>Nama Lengkap</label>
            <input type="text" required="required" name= "namaLengkap" value="{{ $a->namaLengkap }}" class="form-control">  
            </div>
            <div class="form-group">
                <label>Jabatan</label>
            <input type="text" required="required" name= "jabatan" value="{{ $a->jabatan }}" class="form-control">  
            </div>
            <div class="form-group">
                <label>Alamat</label>
            <input type="text" required="required" name= "alamat" value="{{ $a->alamat }}" class="form-control">  
            </div>
            <div class="form-group">
                <label>No. Handphone</label>
            <input type="text" required="required" name= "noHandp" value="{{ $a->noHandp}}" class="form-control">  
            </div>
            <div class="form-group">
                <label>Status Pegawai</label>
            <input type="text" required="required"  name= "status" value="{{ $a->status}}" class="form-control">  
            </div>
            <br>
            <button type="reset" style="width: 200px; background-color:red; border-radius:20px; color:#ffffff;" >
            Reset
            </button>
            <button type="submit"  style="width: 200px; background-color:#000035; border-radius:20px; color:#ffffff;" >
            Edit
            </button>
            <br>
            <br><br>
    </div>
    </form>
    @endforeach

    <div class="container">
    <a href="/awaladmin"><button type="submit"  style="width: 200px; background-color:green; border-radius:20px; color:#ffffff;" >
            Back
            </button></a>
            </div>
            <br><br>
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