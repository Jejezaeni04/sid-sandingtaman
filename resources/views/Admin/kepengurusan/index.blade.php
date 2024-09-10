@extends('layout_admin.main')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Kepengurusan</h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="container mt-4">
            <div class="row">
              <div class="col-8">
                Data Aparatur
              </div>
              <div class="col text-right">
                <a href="{{route('add_aparatur')}}" class="btn btn-success btn-icon-split">
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
                @if (count($aparatur)>0)
                    
                @foreach ($aparatur as $item)
                <div class="col mt-2">
                  <div class="card" style="width: 18rem;">
                    <img src="{{ url('/storage/aparatur/'.$item->foto) }}" alt="..." class="ap">
                    {{-- <img src="{{ url('/storage/aparatur/'.$item->foto) }}" class="card-img-top" alt="..." sizes="200px"> --}}
                    <div class="card-body">
                          <h5 class="card-title">{{$item->nama}}</h5>
                          <p class="card-text">{{$item->jabatan}}</p>
                          <hr>
                          <div class="row">
                            <div class="col">
                              <a href="/aparatur/edit/{{$item->id}}" class="btn btn-primary">
                                <i class="fa fa-edit"></i>
                              </a>
                            </div>
                            <div class="col">
                              {{-- <a href="#" class="btn btn-primary">
                                <i class="fa fa-eye"></i>
                              </a> --}}
                            </div>
                            <div class="col">
                              <a href="/aparatur/hapus/{{$item->id}}" class="btn btn-danger" data-confirm-delete="true">
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