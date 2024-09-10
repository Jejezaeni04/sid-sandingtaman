@extends('layout_admin.main')
@section('content')
<div class="card shadow mb-4 ml-4 mr-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Detail Pengaduan</h6>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-6">
                @if ($pengaduan->gambar == 'default.png')
                          <img src="{{url('img/'.$pengaduan->gambar)}}" class="img-fluid px-3 px-sm-4 mt-3 mb-4">
                          @else
                          <img src="{{ url('/storage/pengaduan/'.$pengaduan->gambar) }}" class="img-fluid px-3 px-sm-4 mt-3 mb-4">
                        @endif
            </div>
            <div class="col-6">
                <div class="row">
                    <label for="">Nama : </label> {{ $pengaduan->nama_pengadu}}
                </div>
                <div class="row">
                    <label for="">Alamat : </label> {{ $pengaduan->alamat_pengadu}}
                </div>
                <div class="row">
                    <label for="">No. Hp/WA : </label> {{ $pengaduan->nohp}}
                </div>
                <div class="row">
                    <label for="">Jenis Keterangan : </label> {{ $pengaduan->jenis_keterangan}}
                </div>
                <div class="row">
                    <label for="">Isi Keterangan : </label> {!! $pengaduan->isi_keterangan !!}
                </div>
                
            </div>
        </div>
    </div>
    <div class="card-footer py-3">
        <a href="{{route('pengaduan.index')}}" class="btn btn-danger">Kembali</a>
    </div>
</div>
@endsection