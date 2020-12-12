<!DOCTYPE html>
<html>
<head>

	<title>Welcome to Lilik's Page</title>
</head>
<body>
 
	<header>

		<h2>Belajar Laravel</h2>
		<nav>
			<a href="/pageAwal">Home</a>
			|
			<a href="/article">Article</a>
			|
			<a href="/about">About</a>
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>
 
	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>
 
 
	<!-- bagian konten blog -->
	@yield('konten')
 
 
	<br/>
	<br/>
	<hr/>
	<footer>
		<p>&copy; <a href="https://www.malasngoding.com">www.malasngoding.com</a>. 2018 - 2019</p>
	</footer>
 
</body>
</html>