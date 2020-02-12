<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Malas Ngoding - Tutorial Laravel #18 : Membuat Form Validasi Pada Laravel</title>

  <!-- bootstrap -->
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"> -->
  <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap.min.css') }}">

</head>
<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card mt-5">
          <div class="card-body">
            <h3 class="text-center">Form Validation Training</h3>
            <br/>

            {{-- menampilkan error validasi --}}
            @if (count($errors) > 0)
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif

            <br/>
            <!-- form validasi -->
            <form action="/proses" method="post">
              {{ csrf_field() }}

              <!--  NAMA -->
              <div class="form-group">
                <label for="nama">Nama</label>
                <input class="form-control {{ ($errors->has('nama')) ? 'is-invalid' : '' }} {{ (old('nama')) ? 'is-valid' : '' }}"
                type="text" name="nama" value="{{ old('nama') }}">
                @if ($errors->has('nama'))
                <div class="invalid-feedback">{{ $errors->first('nama') }}</div>
                @endif
              </div>
              <!-- PEKERJAAN -->
              <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <input class="form-control {{ ($errors->has('pekerjaan')) ? 'is-invalid' : '' }} {{ (old('pekerjaan')) ? 'is-valid' : '' }}"
                type="text" name="pekerjaan" value="{{ old('pekerjaan') }}">
                @if ($errors->has('pekerjaan'))
                <div class="invalid-feedback">{{ $errors->first('pekerjaan') }}</div>
                @endif
              </div>
              <!-- USIA -->
              <div class="form-group">
                <label for="usia">Usia</label>
                <input class="form-control {{ ($errors->has('usia')) ? 'is-invalid' : '' }} {{ (old('usia')) ? 'is-valid' : '' }}"
                type="text" name="usia" value="{{ old('usia') }}">
                @if ($errors->has('usia'))
                <div class="invalid-feedback">{{ $errors->first('usia') }}</div>
                @endif
              </div>
              <!-- PASSWORD -->
              <div class="form-group row mb-4">
                <div class="col-6">
                  <label for="passworduser">Password</label>
                  <input class="form-control {{ ($errors->has('passworduser')) ? 'is-invalid' : '' }} {{ (old('passworduser')) ? 'is-valid' : '' }}"
                  type="password" name="passworduser" value="{{ old('passworduser') }}">
                  @if ($errors->has('passworduser'))
                  <div class="invalid-feedback">{{ $errors->first('passworduser') }} ASD</div>
                  @endif
                </div>
                <div class="col-6">
                  <label for="passwordconfirmation">Password Confirmation</label>
                  <input class="form-control {{ ($errors->has('passwordconfirmation')) ? 'is-invalid' : '' }} {{ (old('passwordconfirmation')) ? 'is-valid' : '' }}"
                  type="password" name="passwordconfirmation" value="{{ old('passwordconfirmation') }}">
                  @if ($errors->has('passwordconfirmation'))
                  <div class="invalid-feedback">{{ $errors->first('passwordconfirmation') }}</div>
                  @endif
                </div>
              </div>
              <div class="form-group">
                <input class="btn btn-primary float-right" type="submit" value="Proses">
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
