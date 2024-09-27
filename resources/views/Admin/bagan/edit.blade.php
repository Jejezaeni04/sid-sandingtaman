@extends('layout_admin.main')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Bagan Struktur Organisasi</h1>
    
    <p class="mb-4"></p>
    <div class="card shadow">
        <div class="container mt-4">
          <form action="{{route('bagan.update',$bagan->id_bagan)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3 row ml-3 mr-3">
                <label for="" class="col-sm-2 col-form-label">Kategori Bagan Struktur Organisasi
                </label>
                <div class="col-sm-10">
                    <select class="form-control" id="inputGroupSelect01" name="kategori" required>
                        <option >Pilih Kategori</option>
                        <option value="{{$bagan->kategori}}" selected>{{$bagan->kategori}}</option>
                        <option name="kategori" value="Perangkat Desa">Perangkat Desa</option>
                        <option name="kategori" value="BPD">BPD</option>
                        <option name="kategori" value="PKK">PKK</option>
                        <option name="kategori" value="LPM">LPM</option>
                        <option name="kategori" value="PKRT">PKRT</option>
                        <option name="kategori" value="Linmas">Linmas</option>
                      </select>
                </div>
              </div>
            <div class="mb-3 row ml-3 mr-3">
                <label for="" class="col-sm-2 col-form-label">Deskripsi</label>
                <div class="col-sm-10">
                    {{-- <textarea class="form-control" style="height: 100px" name="deskripsi" rows="5" placeholder="Masukkan Konten Post" required>{{ old('deskripsi') }}</textarea> --}}
                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi" rows="5" placeholder="Masukkan Konten Post">{{$bagan->deskripsi}}</textarea>
                    
                </div>
              </div>
              <div class="mb-3 row ml-3 mr-3">
                <label for="" class="col-sm-2 col-form-label">Gambar Bagan</label>
                <div class="col-sm-10">
                    <div class="input-group mb-3"> 
                        <input type="file" class="form-control visually-hidden" id="customFile" accept="image/*" multiple onchange="showFiles(this)" name="gambar_bagan" required>
                        <button class="btn btn-success" type="button" onclick="document.getElementById('customFile').click()" hidden> 
                            Choose Files 
                        </button> 
                    </div>
                    <div class="mt-3"> 
                        <div class="row">Foto Sebelumnya</div> 
                        <div class="row" id="imagePreviews">
                            <img src="{{ asset('/storage/bagan/'.$bagan->gambar_bagan) }}" class="img-fluid rounded" alt="" width="300px" >
                        </div> 
                    </div> 
                </div>
                <div class="container mt-4">
                    <div class="row">
                      <div class="col-8">
                        <a href="{{route('bagan.index')}}" class="btn btn-danger ">
                            <span class="text">Kembali</span>
                        </a>
                      </div>
                      <div class="col text-right">
                        <button type="submit" class="btn btn-success">
                          <span class="text">Tambah Data</span>
                        </button>
                      </div>
                    </div>
                  </div> 
              </div>
            </form>
            </div>
        </div>
    </div>

    <script> 
        function showFiles(input) { 
            const previewsContainer = 
                document.getElementById('imagePreviews'); 
                
            previewsContainer.innerHTML = ''; 
            const files = input.files; 
            for (let i = 0; i < files.length; i++) { 
                const file = files[i]; 
                const reader = new FileReader(); 
                reader.onload = function (e) { 
                    const preview = document.createElement('div'); 
                    preview.classList.add('col-md-4', 'mb-3'); 
                    preview.innerHTML = ` 
            <img src="${e.target.result}" alt="Preview" class="img-fluid rounded"> 
            <div class="text-center mt-2"> 
            <span class="badge bg-succsess">${file.name}</span> 
            </div> 
        `; 
                    previewsContainer.appendChild(preview); 
                }; 
                reader.readAsDataURL(file); 
            } 
        } 
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor.create(document.querySelector('#deskripsi')).then(editor => {
        console.log("Editor is ready to use!", editor);
    })
    .catch(error => {
        console.error(error);
    });
    </script>
@endsection