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
                    <a href="#">Berita</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid blog about bg-light py-2">
    <div class="container py-1 about-item-content bg-white rounded p-2">
        <div class="mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" >
            <h4 class="ms-1">Berita Desa</h4>
                    <p class="ms-1 text-black">Menyajikan Informasi Terbaru Tentang Peristiwa, Berita Terkini, dan Artikel-Artikel Dari Desa Sandingtaman.</p>
            <hr>
        </div>
        <div class="row g-4 justify-content-center">
            @if (count($berita)>0)      
            @foreach ($berita as $item)
            <div class="col-lg-4 col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-item">
                    <div class="blog-img text-center">
                        <img src="{{ url('/storage/berita/'.$item->gambar) }}" height="250px">
                        <div class="blog-categiry py-2 px-4">
                            <span>Berita</span>
                        </div>
                    </div>
                    <div class="blog-content p-4">
                        <div class="blog-comment d-flex justify-content-between mb-3">
                            <div class="small"><span class="fa fa-user text-primary"></span> {{$item->nama_admin}}</div>
                            <div class="small"><span class="fa fa-calendar text-primary"></span> {{$item->tanggal_upload}}</div>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3">{{$item->nama_berita}}</a>
                        <p class="mb-3">{!! Str::limit($item->deskripsi, 150) !!}</p>
                        <a href="{{route('berita.show',$item->id)}}" class="btn p-0">Read More  <i class="fa fa-arrow-right"></i></a>
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
@endsection