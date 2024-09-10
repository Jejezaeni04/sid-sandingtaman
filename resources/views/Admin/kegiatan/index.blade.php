@extends('layout_admin.main')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Kegiatan</h1>
    
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="container mt-4">
            <div class="row">
              <div class="col-8">
                Data Kegiatan
              </div>
              <div class="col text-right">
                <a href="{{route('add_kegiatan')}}" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50 btn-sm">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Data</span>
                </a>
              </div>
            </div>
          </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Gambar</th>
                            <th>Judul Kegiatan</th>
                            <th>Lokasi Kegiatan</th>
                            <th>Deskripsi</th>
                            <th>Tanggal Upload</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      @if (count($kegiatan)>0)
                      @php
                      $no = 1;
                      @endphp
                      @foreach ($kegiatan as $item)
                      <tr>
                        <td>{{$no++}}</td>
                        <td><img src="{{ url('/storage/kegiatan/'.$item->gambar) }}" class="avatar avatar-lg"></td>
                        <td>{{$item->nama_kegiatan}}</td>
                        <td>{{$item->lokasi_kegiatan}}</td>
                        <td>{!! Str::limit($item->deskripsi, 50) !!}</td>
                        <td>{{$item->tanggal_upload}}</td>
                        <td>
                          <a href="/kegiatan/edit/{{$item->id}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                          {{-- <a class="btn btn-danger hapus" href="#" data-toggle="modal">
                              <i class="fas fa-trash"></i>
                          </a> --}}
                          <a href="/kegiatan/hapus/{{$item->id}}" class="btn btn-danger" data-confirm-delete="true">
                            <i class="fas fa-trash"></i>
                          </a>
                          {{-- <a href="/kegiatan/hapus/{{$item->id}}" class="btn btn-danger hapus" data-toggle="modal">
                            <i class="fas fa-trash"></i>
                          </a> --}}
                        </td>
                      </tr>
                      @endforeach
                      @else
                      <tr>
                        <th colspan="7" class="text-center">No Data</th>
                    </tr>
                      @endif
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
  
@endsection