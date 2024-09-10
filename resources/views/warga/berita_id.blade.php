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
                    <a href="{{route('berita.terkini')}}" class="text-dark">Berita</a>
                    <i class="fa fa-arrow-right small"></i>
                    <a href="#">{{$berita->nama_berita}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid faq-section bg-light py-3">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <div class="container mb-3">
                    <div class="row">
                      <div class="col">
                        <div class="small"><span class="fa fa-user text-grey"></span> {{$berita->nama_admin}}</div>
                      </div>
                      <div class="col">
                        <div class="small"><span class="fa fa-calendar text-grey"></span> {{$berita->tanggal_upload}}</div>
                      </div>
                    </div>
                  </div>
                <img src="{{ url('/storage/berita/'.$berita->gambar) }}" class="img-fluid w-100" alt="">
            </div>
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="h-100">
                    <div class="mb-5">
                        <h1 class="display-4 mb-0">{{$berita->nama_berita}}</h1>
                        <div class="accordion-body rounded">
                            {!! $berita->deskripsi !!}
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection