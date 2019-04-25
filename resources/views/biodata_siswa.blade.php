<!DOCTYPE html>
<html>
<head>
	<title>Siswa biodata</title>
</head>
<body>
<p>Berikut biodata saya</p>


<p>Nama : {{$nama}}</p>
<p>Alamat : {{$alamat}}</p>

<ul>
	@foreach($hobby as $x)
	<li>{{$x}}</li>
	@endforeach
</ul>

</body>
</html>