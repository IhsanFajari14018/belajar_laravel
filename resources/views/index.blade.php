<!DOCTYPE html>
<html>
<head>
  <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>

  <!-- STYLING -->
  <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap.min.css') }}">


  <style type ="text/css">
  .pagination li{
    float: left;
    list-style-type: none;
    margin: 0px;
  }
  </style>

  <!-- END OF STYLING -->
</head>
<body class="bg-light">

  <header>

  </header>

  <!-- ALL MAIN CONTENT -->
  <main>

    <!-- MAIN TITLE -->
    <section class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="display-2">www.malasngoding.com</h2>
        </div>
        <div class="col-12">
          <h3>Data Pegawai</h3>
        </div>
      </div>
    </section>

    <!-- MAIN DATA CONTENT -->
    <section class="container mt-5">

      <!-- TAGLINE & CURRENT SEARCH -->
      <p>
        Cari Data Pegawai <br>
        Previous Search: {{ old('cari') }}
      </p>

      <!-- SEARCH BOX -->
      <form role="form" action="/pegawai/cari" method="GET">
        <div class="form-group row">
          <div class="col-2 pr-0">
            <input type="text" class="form-control" name="cari"  value="{{ old('cari') }}">
          </div>
          <div class="col-4 pl-0">
            <input type="submit" class="btn btn-info" value="CARI">
          </div>
        </div>
      </form>

      <br>

      <!-- ADD NEW PEGAWAI -->
      <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

      <br/>
      <br/>

      <!-- DISPLAY PEGAWAI IN TABLE -->
      <div class="table-responsive bg-white">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th>Nama</th>
              <th>Jabatan</th>
              <th>Umur</th>
              <th>Alamat</th>
              <th>Opsi</th>
            </tr>
          </thead>
          @foreach($pegawai as $p)
          <tr>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->jabatan }}</td>
            <td>{{ $p->umur }}</td>
            <td>{{ $p->alamat }}</td>
            <td>
              <a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
              |
              <a href="/pegawai/delete/{{ $p->pegawai_id }}">Hapus</a>
            </td>
          </tr>
          @endforeach
        </table>
      </div>

      <br/>

      Halaman: {{$pegawai->currentPage()}} <br/>
      Jumlah Data: {{$pegawai->total()}} <br/>
      Data Per Halaman: {{$pegawai->perPage()}} <br/>

      <!-- PAGINATION -->
      <div class="mt-3">
        {{$pegawai->links()}}
      </div>

    </section>

  </main>

  <script type="text/javascript" src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>

</body>
</html>
