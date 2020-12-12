<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Tampilan Menu Admin</title>
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

<div class="bg" style="background-color:#d3d3d3;">
<div class="container">
<br><br><br>
<h1 style="text-align:center; font-family:sans-serif;">LIST MENU</h1>
<br>
<table border="2" cellspacing="10" cellpadding="10" style="margin:0 auto; text-align:center; background-color:white;">
<thead>
<tr>
<th>ID Menu</th>
<th>Foto Menu</th>
<th>Nama Menu</th>
<th>Harga Menu</th>
<th>Stock Menu</th>
<th>Keterangan Menu</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@foreach($menuadmin as $ma)
<tr>
<td>{{$ma->id}}</td>
<td><img src="{{ url('/UploadsMenu/'.$ma->filenama) }}" alt="" width="150px" height:="150px"></td>
<td>{{$ma->nama}}</td>
<td>{{$ma->harga}}</td>
<td>{{$ma->stock}}</td>
<td>{{$ma->keterangan}}</td>
<td>
<a href="/menuadmin/edit/{{ $ma->id}}"><button type="button" style="background-color:blue; border:none; color:white; font-family:sans-serif; float:right;">Edit</button></a>
<br><br>
<a href="/menuadmin/hapus/{{ $ma->id}}"><button type="button" style="background-color:red; border:none; color:white; font-family:sans-serif; float:right;">Hapus</button></a>
</td>
</tr>
@endforeach
</tbody>
</table>
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