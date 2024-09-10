@extends('layout_admin.main')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Pengaduan atau Saran Warga</h1>
    
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="container mt-4">
            <div class="row">
              <div class="col-8">
                Data Pengaduan atau Saran
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
                            <th>Nama Pengadu</th>
                            <th>Alamat Pengadu</th>
                            <th>Jenis Keterangan</th>
                            <th>Isi Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    @if (count($pengaduan)>0)
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($pengaduan as $item)
                    <tbody>
                      <tr>
                        <td>{{$no++}}</td>
                        <td>@if ($item->gambar == 'default.png')
                          <img src="{{url('img/'.$item->gambar)}}" class="avatar avatar-lg">
                          @else
                          <img src="{{ url('/storage/pengaduan/'.$item->gambar) }}" class="avatar avatar-lg">
                        @endif</td>
                        <td>{{$item->nama_pengadu}}</td>
                        <td>{{$item->alamat_pengadu}}</td>
                        <td>{{$item->jenis_keterangan}}</td>
                        <td>{!! Str::limit($item->isi_keterangan, 50) !!}</td>
                        <td>
                          <a href="/pengaduan/show/{{$item->id}}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                         
                          <a href="/pengaduan/hapus/{{$item->id}}" class="btn btn-danger" data-confirm-delete="true">
                            <i class="fas fa-trash"></i>
                          </a>
                        </td>
                      </tr>                       
                    </tbody>
                    @endforeach
                        
                    @else
                    <tr>
                      <th colspan="7" class="text-center">No Data</th>
                  </tr>
                    @endif
                </table>
            </div>
        </div>
    </div>
</div>


  
@endsection