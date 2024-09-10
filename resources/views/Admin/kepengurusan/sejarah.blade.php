@extends('layout_admin.main')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Sejarah Desa</h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      @foreach ($sejarah as $item)
        <div class="container mt-4">
          <div class="row g-5">
            <div class="col-xl-12 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item-content bg-white rounded p-3 h-100">
                    <h4 class="text-primary text-center">Kutupan Sejarah</h4>
                    <p>{!! $item->deskripsi !!}</p>
                </div>
            </div>
        </div>
              <div class="mb-3">
                <div class="row">
                    <div class="col align-right">
                    </div>
                    <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#sejarah{{$item->id}}">
                      <i class="fas fa-edit"></i>
                      Edit
                  </a>
                  </div>
              </div>
            </div>
          </div>
          <form action="{{route('sejarah.update',$item->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal fade" id="sejarah{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Kutipan Sejarah</h5>
              </div>
              <div class="modal-body">
                <form>
                  <div class="mb-3">
                    <label for="message-text" class="col-form-label">Kutipan Sejarah</label>
                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi" rows="5" placeholder="Masukkan Deskripdi">{{ $item->deskripsi }}</textarea>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <button class="btn btn-primary" type="submit" >Save</button>
              </div>
            </div>
          </div>
      </div>
      @endforeach
      
    </form>
    
    <script>
    function showFiles(input) {
      const previewsContainer = document.getElementById('imagePreviews');
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