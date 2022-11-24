<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <h1 class="text-center mt-5">Forn Edit Data Hewan</h1>
        <a href="{{ route('hewan.index') }}" class="btn btn-primary mb-3">Data Hewan</a>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('hewan.update', $hewan->id) }}" method="POST">
                    @csrf
                    {{-- <div class="mb-3">
                      <label for="kode" class="form-label">Kode</label>
                      <input type="text" class="form-control" name="kode" id="kode" value="{{ $hewan->kode }}">
                    </div> --}}
                    <div class="mb-3">
                      <label for="nama_hwn" class="form-label">Nama Hewan</label>
                      <input type="text" class="form-control" name="nama_hwn" value="{{ $hewan->nama_hwn }}" id="nama_hwn">
                    </div>
                    <div class="mb-3">
                      <label for="jenis_hwn" class="form-label">Jenis Hewan</label>
                      <input type="text" class="form-control" name="jenis_hwn" value="{{ $hewan->jenis_hwn }}" id="jenis_hwn">
                    </div>
                    <div class="mb-3">
                      <label for="asal_hwn" class="form-label">Asal Hewan</label>
                      <input type="text" class="form-control" name="asal_hwn" value="{{ $hewan->asal_hwn }}" id="asal_hwn">
                    </div>
                    <div class="mb-3">
                      <label for="umur_hwn" class="form-label">Umur Hewan</label>
                      <input type="number" class="form-control" name="umur_hwn" value="{{ $hewan->umur_hwn }}" id="umur_hwn">
                    </div>
                    <div class="mb-3">
                      <label for="berat_hwn" class="form-label">Berat Hewan</label>
                      <input type="number" class="form-control" name="berat_hwn" value="{{ $hewan->berat_hwn }}" id="berat_hwn">
                    </div>
                    <div class="mb-3">
                      <label for="harga_hwn" class="form-label">Harga Hewan</label>
                      <input type="number" class="form-control" name="harga_hwn" value="{{ $hewan->harga_hwn }}" id="harga_hwn">
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Simpan</button>
                  </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>