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
        <h1 class="text-center mt-5">Data Hewan</h1>
        <a href="{{ route('hewan.create') }}" class="btn btn-primary mb-3">+ Tambah Data</a>
        @if (session('success'))
         <div class="alert alert-success" role="alert">
            {{ session('success') }}
         </div>
         @endif
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Asal</th>
                        <th>Umur</th>
                        <th>Berat</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @if ($hewan->count() > 0)
                        @foreach ( $hewan as $no => $item )
                        <tr>
                            <th>{{ $no+1 }}</th>
                            <td>{{ $item->nama_hwn }}</td>
                            <td>{{ $item->jenis_hwn }}</td>
                            <td>{{ $item->asal_hwn }}</td>
                            <td>{{ $item->umur_hwn }}</td>
                            <td>{{ $item->berat_hwn }}</td>
                            <td>{{ $item->harga_hwn }}</td>
                            <td>
                                <form action="{{ route('hewan.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('hewan.edit', $item->id)}}" class="btn btn-success btn-sm">Edit</a>
                                    <button class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>                            
                        @endforeach
                        @else
                            <tr>
                                <td colspan="10" align="center">Tidak ada data</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>