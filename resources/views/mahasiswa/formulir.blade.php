<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Hello, world!</title>
</head>

<body>
    @if(session()->has('message'))
    <div class="alert alert-success">
        <p class="text-center">{{session('message')}}</p>
    </div>
    @endif
    @if(session()->has('failed'))
    <div class="alert alert-danger">
        <p class="text-center">{{session('failed')}}</p>
    </div>
    @endif
    <div class="container m-3">
        <form method="post" action="{{route('mahasiswa.post')}}">
            @csrf
            <div class="form-group row">
              <label for="nama" class="col-4 col-form-label">Nama</label> 
              <div class="col-8">
                <input id="nama" name="nama" placeholder="Nama lengkap mahasiswa" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="Tempat lahir" class="col-4 col-form-label">Tempat / Tgl lahir</label> 
              <div class="col-8">
                <input id="Tempat lahir" name="Tempat_lahir" placeholder="Tempat / Tgl lahir" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="Alamat" class="col-4 col-form-label">Alamat</label> 
              <div class="col-8">
                <input id="Alamat" name="Alamat" placeholder="Alamat Rumah" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="Alamat" class="col-4 col-form-label">Nomor telepon</label> 
              <div class="col-8">
                <input id="telepon" name="telepon" placeholder="Alamat Rumah" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="Email" class="col-4 col-form-label">Email</label> 
              <div class="col-8">
                <input id="Email" name="Email" placeholder="Email Mahasiswa" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="Jenis kelamin" class="col-4 col-form-label">Jenis kelamin</label> 
              <div class="col-8">
                <input id="Jenis kelamin" name="Jenis_kelamin" placeholder="Jenis kelamin" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="Nama Org Tua / Wali" class="col-4 col-form-label">Nama Org Tua / Wali</label> 
              <div class="col-8">
                <input id="Nama_Org_Tua_/_wali" name="orang_tua" placeholder="Nama Org Tua / Wali" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="No HP Orang Tua" class="col-4 col-form-label">No HP Orang Tua</label> 
              <div class="col-8">
                <input id="No_HP_Orang_Tua" name="No_HP_Orang_Tua" placeholder="No HP Orang Tua" type="text" class="form-control">
              </div>
            </div> 
            <div class="form-group row">
              <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>