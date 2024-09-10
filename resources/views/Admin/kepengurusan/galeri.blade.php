@extends('layout_admin.main')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Galeri Desa</h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="container mt-4">
            <div class="row">
              <div class="col-8">
                Data Galeri
              </div>
              <div class="col text-right">
                <a href="{{route('galeri.create')}}" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50 btn-sm">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Data</span>
                </a>
              </div>
            </div>
          </div>
          
          <div class="card-body">
            <div class="container">
              <div class="row">
                @if (count($galeri)>0)
                
                @foreach ($galeri as $item)
                <div class="col mt-2">
                  <div class="card" style="width: 18rem;">
                    <img src="{{ url('/storage/galeri/'.$item->gambar) }}" class="card-img-top" alt="..." height="300px">
                    <div class="card-body">
                          <h5 class="card-title">{{$item->alamat}}</h5>
                          <p class="card-text">{!! Str::limit($item->deskripsi,10) !!}</p>
                          <hr>
                          <div class="row">
                            <div class="col">
                              
                              
                              </a>
                            </div>
                            <div class="col">
                            
                              </a>
                            </div>
                            <div class="col">
                              <a href="{{route('galeri.destroy',$item->id_galeri)}}" class="btn btn-danger" data-confirm-delete="true">
                                <i class="fa fa-trash"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                    @else
                    <div class="card-body">
                      Data Kosong
                    </div>
                @endif
                  </div>
                </div>
              </div>

    </div>

</div>
@endsection