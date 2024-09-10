@extends('layout_admin.main')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Visi & Misi</h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      @foreach ($vismis as $item)
      <div class="container mt-4">
        <div class="row g-5">
          <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
              <div class="about-item-content bg-white rounded p-3 h-100">
                  <h4 class="text-primary text-center">VISI</h4>
                  <p>{!! $item->visi !!}</p>
              </div>
          </div>
          <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
              <div class="about-item-content bg-white rounded p-3 h-100">
                  <h4 class="text-primary text-center">MISI</h4>
                  <p>{!! $item->misi !!}</p>
              </div>
          </div>
      </div>
            <div class="mb-3">
              <div class="row">
                  <div class="col align-right">
                  </div>
                  <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#editvisi{{$item->id}}">
                    <i class="fas fa-edit"></i>
                    Edit
                </a>
                </div>
            </div>
          </div>
        </div>
        <form action="{{route('visimisi.update',$item->id)}}" method="POST">
          @csrf
          @method('PUT')
          <div class="modal fade" id="editvisi{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ubah Visi & Misi</h5>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Visi</label>
                  <textarea class="form-control @error('visi') is-invalid @enderror" name="visi" id="visi" rows="5" placeholder="Masukkan Deskripsi">{{ $item->visi }}</textarea>
                </div>
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Misi</label>
                  <textarea class="form-control @error('misi') is-invalid @enderror" name="misi" id="misi" rows="5" placeholder="Masukkan Deskripsi">{{ $item->misi }}</textarea>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
          </div>
        </div>
    </div>    
      @endforeach
          </form>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
          <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
          <script>
              ClassicEditor.create(document.querySelector('#visi')).then(editor => {
              console.log("Editor is ready to use!", editor);
          })
          .catch(error => {
              console.error(error);
          });
          </script>
          <script>
              ClassicEditor.create(document.querySelector('#misi')).then(editor => {
              console.log("Editor is ready to use!", editor);
          })
          .catch(error => {
              console.error(error);
          });
          </script>
@endsection