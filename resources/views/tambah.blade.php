<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jenis Penyakit Menular</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body style="background-color: bisque;">
    <h2 class="text-center mt-2">Tambah Penyakit Menular</h2>
    <div class="container mt-3">
        <form action="/tambah" method="POST">
            @csrf
            <div class="mb-3">
                <label for="NamaPenyakit" class="form-label">Nama Penyakit</label>
                <input type="text" class="form-control @error('NamaPenyakit') is-invalid @enderror" id="NamaPenyakit" name="NamaPenyakit">
                @error('NamaPenyakit')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="TotalPenyakit" class="form-label">Total Penyakit</label>
                <input type="text" class="form-control @error('TotalPenyakit') is-invalid @enderror" id="TotalPenyakit" name="TotalPenyakit">
                @error('TotalPenyakit')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="GejalaPenyakit" class="form-label">Gejala Penyakit</label>
                <input type="text" class="form-control @error('GejalaPenyakit') is-invalid @enderror" id="GejalaPenyakit" name="GejalaPenyakit">
                @error('GejalaPenyakit')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="PengobatanPenyakit" class="form-label">Pengobatan Penyakit</label>
                <input type="text" class="form-control @error('PengobatanPenyakit') is-invalid @enderror" id="PengobatanPenyakit" name="PengobatanPenyakit">
                @error('PengobatanPenyakit')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="PenyebabPenyakit" class="form-label">Penyebab Penyakit</label>
                <input type="text" class="form-control @error('PenyebabPenyakit') is-invalid @enderror" id="PenyebabPenyakit" name="PenyebabPenyakit">
                @error('PenyebabPenyakit')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            
            <a href="/" class="btn btn-danger">Kembali</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>