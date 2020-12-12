<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Edit Menu</title>
  </head>
  <body>
  <div class="cd" style="background-color:black;">
  <div class="container text-center">
  <br>
  <h1 style="color: white;">EDIT MENU</h1>
  </div>
<style>

.form-control{
  background:transparent;
    width: 550px;
    color:white;
}
label{
    color:white;
}
</style>
<div class="container">

<br>
    @foreach($menuadmin as $ma)
    <form action="/menuadmin/update" method="post">
    {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $ma->id }}"><br>
            <div class="form-group">
                <label>Nama</label>
            <input type="text" required="required" name= "nama" value="{{ $ma->nama}}" class="form-control">  
            </div>
            <div class="form-group">
                <label>Harga</label>
            <input type="text" required="required" name="harga" value="{{ $ma->harga }}" class="form-control">  
            </div>
            <div class="form-group">
                <label>Keterangan</label><br>
            <select required="required" name="keterangan" value="{{ $ma->keterangan }}">
            <option value="appetizer">Appetizer</option>
            <option value="maincourse">Main Course</option>
            <option value="dessert">Dessert</option>
            <option value="panas">Minuman Panas</option>
            <option value="dingin">Minuman Dingin</option>
            </select>  
            </div>
            <div class="form-group">
                <label>Stock</label>
            <input type="text" required="required" name= "stock" value="{{ $ma->stock }}" class="form-control">  
            </div>
            <br>
            <button type="reset" style="width: 200px; background-color:red; border-radius:20px; color:#ffffff; height: 40px;" >
            Reset
            </button>
            <button type="submit" style="width: 200px; background-color:#000035; border-radius:20px; color:#ffffff; height:40px;" >
            Edit
            </button>
    </form>
    @endforeach
    </div>
    
    <br>
    <div class="container">
    <a href="/menuadmin"><button type="submit" style="width: 200px; background-color:green; border-radius:20px; color:#ffffff; height:40px;" >
            Kembali
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