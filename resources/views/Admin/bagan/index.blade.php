@extends('layout_admin.main')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Bagan Struktur Organisasi</h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="container mt-4">
            <div class="row">
              <div class="col-8">
                Data Bagan
              </div>
              <div class="col text-right">
                <a href="{{route('bagan.create')}}" class="btn btn-success btn-icon-split">
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
                @if (count($bagan)>0)
                    
                @foreach ($bagan as $item)
                <div class="col mt-2">
                  <div class="card" style="width: 18rem;">
                    {{-- <img src="" alt="..." class="ap"> --}}
                    <img src="{{ url('/storage/bagan/'.$item->gambar_bagan) }}" class="card-img-top" alt="..." sizes="200px">
                    <div class="card-body">
                          <h5 class="card-title">{{$item->kategori}}</h5>
                          <p class="card-text">{!!$item->deskripsi!!}</p>
                          <hr>
                          <div class="row">
                            <div class="col">
                              <a href="/bagan-edit/{{$item->id_bagan}}" class="btn btn-primary">
                                <i class="fa fa-edit"></i>
                              </a>
                            </div>
                            <div class="col">
                              {{-- <a href="#" class="btn btn-primary">
                                <i class="fa fa-eye"></i>
                              </a> --}}
                            </div>
                            <div class="col">
                              <a href="/bagan/hapus/{{$item->id_bagan}}" class="btn btn-danger" data-confirm-delete="true">
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