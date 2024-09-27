@extends('layout_admin.main')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tambah Daftar Aparatur Desa</h1>
    
    <p class="mb-4"></p>
    <div class="card shadow">
        <div class="container mt-4">
          <form action="{{route('add_aparatur_proses')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 row ml-3 mr-3">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text"  class="form-control" id="staticEmail" name="nama" required>
                </div>
              </div>
            <div class="mb-3 row ml-3 mr-3">
                <label for="staticEmail" class="col-sm-2 col-form-label">NIK</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="staticEmail" name="nik" required>
                </div>
              </div>
            <div class="mb-3 row ml-3 mr-3">
                <label for="staticEmail" class="col-sm-2 col-form-label">No. Hp</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="staticEmail" name="nohp" required>
                </div>
            </div>
            <div class="mb-3 row ml-3 mr-3">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email"  class="form-control" id="staticEmail" name="email" required>
                </div>
            </div>
            <div class="mb-3 row ml-3 mr-3">
                <label for="staticEmail" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                  <select class="form-control" id="inputGroupSelect01" name="alamat" required>
                    <option selected>Pilih Alamat</option>
                    @if (count($dusun)>0)
                        @foreach ($dusun as $item)
                        <option name="alamat" value="{{$item->nama_dusun}}">{{$item->nama_dusun}}</option>
                        @endforeach
                    @else
                        
                    @endif
                  </select>
                </div>
            </div>
            <div class="mb-3 row ml-3 mr-3">
                <label for="staticEmail" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <select class="form-control" id="inputGroupSelect01" name="jabatan" required>
                        <option selected>Pilih Jabatan</option>
                        <option name="jabatan" value="Kepala Desa">Kepala Desa</option>
                        <option name="jabatan" value="Sekertaris Desa">Sekertaris Desa</option>
                        <option name="jabatan" value="Kaur Umum">Kaur Umum</option>
                        <option name="jabatan" value="Kaur Keuangan">Kaur Keuangan</option>
                        <option name="jabatan" value="Kaur Perencanaan">Kaur Perencanaan</option>
                        <option name="jabatan" value="Kasi Pemerintahan">Kasi Pemerintahan</option>
                        <option name="jabatan" value="Kasi Kesejahteraan">Kasi Kesejahteraan</option>
                        <option name="jabatan" value="Kasi Pelayanan">Kasi Pelayanan</option>
                        <option name="jabatan" value="Kepala Dusun Citaman">Kepala Dusun Citaman</option>
                        <option name="jabatan" value="Kepala Dusun Karoya">Kepala Dusun Karoya</option>
                        <option name="jabatan" value="Kepala Dusun Cipicung">Kepala Dusun Cipicung</option>
                        <option name="jabatan" value="Kepala Dusun Sindangjaya">Kepala Dusun Sindangjaya</option>
                        <option name="jabatan" value="Kepala Dusun Cidarma">Kepala Dusun Cidarma</option>
                        <option name="jabatan" value="Kepala Dusun Nanggela">Kepala Dusun Nanggela</option>
                        <option name="jabatan" value="Kepala Dusun Sanding">Kepala Dusun Sanding</option>
                      </select>
                </div>
            </div>
              
              <div class="mb-3 row ml-3 mr-3">
                <label for="" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date"  class="form-control" id="staticEmail" name="tgl_lahir" required>
                </div>
              </div>
              <div class="mb-3 row ml-3 mr-3">
                <label for="" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-10">
                    <div class="input-group mb-3"> 
                        <input type="file" class="form-control visually-hidden" id="customFile" accept="image/*" multiple onchange="showFiles(this)" name="foto" required>
                        <button class="btn btn-success" type="button" onclick="document.getElementById('customFile').click()" hidden> 
                            Choose Files 
                        </button> 
                    </div>
                    <div class="mt-3"> 
                        <div class="row" id="imagePreviews"></div> 
                    </div> 
                </div>
                <div class="container mt-4">
                    <div class="row">
                      <div class="col-8">
                        <a href="{{route('aparatur')}}" class="btn btn-danger ">
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
@endsection