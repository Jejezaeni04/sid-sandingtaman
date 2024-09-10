@extends('layout_admin.main')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Daftar Berita</h1>
    
    <p class="mb-4"></p>
    <div class="card shadow">
        <div class="container mt-4">
            <form action="{{route('berita.update', $berita->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3 row ml-3 mr-3">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Judul Berita</label>
                    <div class="col-sm-10">
                      <input type="text"  class="form-control" id="staticEmail" name="nama_berita" required value="{{$berita->nama_berita}}">
                      <input type="text" value="Administrator" readonly  name="nama_admin" hidden value="{{$berita->nama_admin}}">
                    </div>
                  </div>
                  <div class="mb-3 row ml-3 mr-3">
                    <label for="" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi" rows="5" placeholder="Masukkan Konten Post">{{$berita->deskripsi}}</textarea>
                    </div>
                  </div>
                  <div class="mb-3 row ml-3 mr-3">
                    <label for="" class="col-sm-2 col-form-label">Tanggal Upload</label>
                    <div class="col-sm-10">
                        <input type="date"  class="form-control" id="staticEmail" name="tanggal_upload" required value="{{$berita->tanggal_upload}}">
                    </div>
                  </div>
                  <div class="mb-3 row ml-3 mr-3">
                    <label for="" class="col-sm-2 col-form-label">Gambar Sampul Berita</label>
                    <div class="col-sm-10">
                        <div class="input-group mb-3"> 
                            <input type="file" class="form-control visually-hidden" id="customFile" accept="image/*" multiple onchange="showFiles(this)" name="gambar" required value="">
                            <button class="btn btn-success" type="button" onclick="document.getElementById('customFile').click()" hidden> 
                                Choose Files 
                            </button> 
                        </div>
                        <div class="mt-3"> 
                            <div class="row">Gambar Sebelumnya</div>
                            <div class="row" id="imagePreviews">
                                 <img src="{{ asset('/storage/berita/'.$berita->gambar) }}" class="img-fluid rounded" alt="" width="300px" >
                            </div> 
                        </div> 
                    </div>
                    <div class="container mt-4">
                        <div class="row">
                          <div class="col-8">
                            <a href="{{route('berita')}}" class="btn btn-danger ">
                                <span class="text">Kembali</span>
                            </a>
                          </div>
                          <div class="col text-right">
                            <button type="submit" class="btn btn-success">Tambah Data</button>
                            {{-- <a href="" class="btn btn-success ">
                                <span class="text">Tambah Data</span>
                            </a> --}}
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