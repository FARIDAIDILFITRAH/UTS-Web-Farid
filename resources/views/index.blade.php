<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jenis Penyakit Menular</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body style="background-color: rgba(221, 255, 0, 0.413);">
    <h2 class="text-center mt-2">DATA JENIS PENYAKIT MENULAR</h2>
    <div class="container mt-3">

        <table class="table">
            <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">NAMA</th>
                <th scope="col">TOTAL PENYAKIT</th>
                <th scope="col">REACT</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($penyakit as $item)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$item->NamaPenyakit}}</td>
                    <td>{{$item->TotalPenyakit}}</td>

                    <td>
                        <a href="{{'/lihat/'.$item->id}}" class="btn btn-info">Lihat</a>
                        <a href="{{'/edit/'.$item->id}}" class="btn btn-success">Update</a>
                        <a onclick="return confirm('Yakin Anda Ingin Hapus Data Ini ?')"href="{{'/hapus/'.$item->id}}"class="btn btn-danger">- Hapus Data</a>
                        
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
          <a href="/tambah" class="btn btn-primary">+ Tambah Data</a>
          
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>