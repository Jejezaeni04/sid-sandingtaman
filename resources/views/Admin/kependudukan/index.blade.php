@extends('layout_admin.main')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Wilayah Desa Sandingtaman</h1>
    
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="container mt-4">
            <div class="row">
              <div class="col-8">
                Data Wilayah
              </div>
              <div class="col text-right">
                <a href="{{route('penduduk.add')}}" class="btn btn-success btn-icon-split">
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
                            <th>Nama Dusun</th>
                            <th>Nama Kepala Dusun</th>
                            <th>Luas Wilayah</th>
                            <th>Jumlah Penduduk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      @if (count($wilayah)>0)
                      @php
                          $no = 1;
                      @endphp
                      @foreach ($wilayah as $item)
                      <tr>
                        <td>{{$no++}}</td>
                        <td>@if ($item->gambar == 'default.png')
                          <img src="{{url('img/'.$item->gambar)}}" class="avatar avatar-lg">
                          @else
                          <img src="{{ url('/storage/penduduk/'.$item->gambar) }}" class="avatar avatar-lg">
                        @endif</td>
                        <td>{{$item->nama_dusun}}</td>
                        <td>{{$item->nama_aparat}}</td>
                        <td>{{$item->luas_wilayah}}</td>
                        <td>{{$item->jumah_penduduk}}</td>
                        <td>
                          <a href="{{route('penduduk.edit',$item->id)}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                         
                          <a href="{{route('penduduk.destroy',$item->id)}}" class="btn btn-danger" data-confirm-delete="true">
                            <i class="fas fa-trash"></i>
                          </a>
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