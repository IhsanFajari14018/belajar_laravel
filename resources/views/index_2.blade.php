<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #20 : Eloquent Laravel</title>

  <style type ="text/css">
  .pagination li{
    float: left;
    list-style-type: none;
    margin: 2px;
  }
  </style>
</head>
<body>

<h1>Data Pegawai</h1>
<!-- <h3>www.malasngoding.com</h3> -->

<ul>
	@foreach($pegawai as $p)
		<li>{{ "Nama : ". $p->nama . ' | Alamat : ' . $p->alamat }}</li>
	@endforeach
</ul>

Halaman: {{$pegawai->currentPage()}} <br/>
Jumlah Data: {{$pegawai->total()}} <br/>
Data Per Halaman: {{$pegawai->perPage()}} <br/>

<!-- PAGINATION -->
<div class="mt-3">
  {{$pegawai->links()}}
</div>

</body>
</html>
