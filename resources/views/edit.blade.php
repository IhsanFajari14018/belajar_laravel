<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{$pegawai->pegawai_id}}"> <br/>
		Nama <input type="text" name="nama" required="required" value="{{$pegawai->nama}}"> <br/>
		Jabatan <input type="text" name="jabatan" required="required" value="{{$pegawai->jabatan}}"> <br/>
		Umur <input type="number" name="umur" required="required" value="{{$pegawai->umur}}"> <br/>
		Alamat <textarea name="alamat" required="required">{{$pegawai->alamat}}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
