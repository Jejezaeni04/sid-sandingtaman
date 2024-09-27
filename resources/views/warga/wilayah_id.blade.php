@extends('layout_warga.main')
@section('content')
<div class="container-fluid bg-light about py-3">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-12 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item-content bg-white rounded p-2">
                    <a href="{{route('/')}}" class="text-dark"><i class= "fa fa-home"></i></a>
                    <i class="fa fa-arrow-right small"></i>
                    <a href="#" class="text-dark">Informasi</a>
                    <i class="fa fa-arrow-right small"></i>
                    <a href="{{route('wilayah.index')}}" class="text-dark">Wilayah</a>
                    <i class="fa fa-arrow-right small"></i>
                    <a href="#">{{$wilayah->nama_dusun}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid faq-section bg-white rounded py-3">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-4 wow fadeInRight" data-wow-delay="0.4s">
                @if ($wilayah->gambar == 'default.png')
                <img src="{{ url('img/'.$wilayah->gambar) }}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                @else
                <img src="{{ url('/storage/penduduk/'.$wilayah->gambar) }}" class="bd-placeholder-img card-img-top" width="100%" height="100%">
                @endif
            </div>
            <div class="col-xl-8 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="h-100">
                    <div class="mb-5">
                        <div class="row">
                            <div class="col-8">
                                <h1 class="display-4 mb-0">{{$wilayah->nama_dusun}}</h1>
                                <p class="text-dark">Kepala Dusun : <b>{{$wilayah->nama_aparat}}</b></p>
                                <p class="text-dark">Luas Wilayah : <b>{{$wilayah->luas_wilayah}}</b></p>
                                <p class="text-dark">Jumlah Penduduk : <b>{{$wilayah->jumah_penduduk}}</b></p>
                            </div>
                            <div class="col-4">
                                @foreach ($aparat->where('nama',$wilayah->nama_aparat) as $item)
                                <div class="card shadow-sm">
                                    <img src="{{url('/storage/aparatur/'.$item->foto)}}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                                </div>
                            </div>
                            @endforeach
                            </div>
                        </div>
                        <div class="accordion-body rounded">
                            {!! $wilayah->deskripsi !!}
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid blog" >
    <div class="container py-3">
        <div class="mx-auto pb-3 wow fadeInUp" data-wow-delay="0.2s" >
            <h4 class="text-primary"><b> Galeri </b></h4>
            <hr>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
            @foreach ($galeri->where('alamat', $wilayah->nama_dusun) as $item)
            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{url('/storage/galeri/'.$item->gambar)}}" class="bd-placeholder-img card-img-top" width="100%" height="225">
                    <div class="card-body">
                        <p class="card-text text-center">{{$item->alamat}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection