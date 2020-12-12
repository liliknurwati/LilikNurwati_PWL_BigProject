<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>review</title>
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

<div class="box" style="background-color:#87CEeb;">
<br><br><br>
<div class="container"><h2>Insert Your Review about Our Restaurant</h2>
<br>
            <form action="{{action('ReviewController@store')}}" method="POST">
            {{ csrf_field()}}
            <div class="form-group">
                <label>Nama</label>
            <input type="text" name= "nama" class="form-control" style="width:400px;">  
            </div>
            <div class="form-group">
                <label>Review, Kritik dan Saran</label><br>
            <textarea name="review" id="" cols="75" rows="5" style="border-radius:20px; border:none;">
            </textarea>
            </div>
            <br>

            
            <button type="submit" style= "width:80px; background-color:green; color:white; border-radius:12px; border:none;" >
            Add</button><br>

            @if(count($errors)>0)
    <div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    </ul>
    </div>
    @endif

    @if(\Session::has('success'))
        <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
        </div>
        @endif

            </form>
            <br><br>
            </div>
  </div>
  <div class="bx" style="background-color:#b0e0e6;">
  <br>
  <h1 style="text-align:center;">REVIEWS</h1>
  <br>

  @foreach($review as $r)
  <div class="container">
  <br>
  <div class="card-header" style="background-color:#3E424B; color:white;">
    {{$r->nama}}
  </div>
  <div class="card-body" style="background-color:white; color:black;">
    <blockquote class="blockquote mb-0" >
      <p>{{$r->review}}</p>
      <footer class="blockquote-footer"><cite title="Source Title">{{$r->created_at}}</cite></footer>
    </blockquote>
  </div>
  
<br>
</div>
@endforeach

  </div>
 
  <br>

  <br>
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