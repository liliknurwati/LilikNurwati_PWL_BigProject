<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Halaman awal admin</title>
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


<div class="awal" style="background-color:#d3d3d3;">
<br>
<div class="container">
<br><br>
<h1 style="text-align:center; font-family:sans-serif;">LIST EMPLOYEES</h1>
<br>
<table border="1" cellspacing="10" cellpadding="10" style="background-color:white; border-color:#d3d3d3">
<thead>
<tr>
<th>ID Pegawai</th>
<th>Foto Pegawai</th>
<th>Nama Pegawai</th>
<th>Jabatan Pegawai</th>
<th>No. Telepon Pegawai</th>
<th>Alamat Pegawai</th>
<th>Tanggal Masuk Kerja</th>
<th>Status Pegawai</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@foreach($halawaladmin as $s)
<tr>
<td>{{$s->id}}</td>
<td><img src="{{ url('/Uploads/'.$s->file) }}" alt="" width="150px" height:="150px"></td>
<td>{{$s->namaLengkap}}</td>
<td>{{$s->jabatan}}</td>
<td>{{$s->noHandp}}</td>
<td>{{$s->alamat}}</td>
<td>{{$s->created_at}}</td>
<td>{{$s->status}}</td>
<td>
<a href="/awaladmin/edit/{{$s->id}}"><button type="button" style="background-color:blue; border:none; color:white; font-family:sans-serif; float:right;">Edit</button></a>
<br><br>
<a href="/awaladmin/hapus/{{ $s->id}}"><button type="button" style="background-color:red; border:none; color:white; font-family:sans-serif; float:right;">Hapus</button></a>
</td>
</tr>
@endforeach
</tbody>
</table>
<br><br>
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