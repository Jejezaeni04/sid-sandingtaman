@extends('layout_warga.main')
@section('content')

<div class="header-carousel owl-carousel">
    <div class="header-carousel-item ">
        <img src="{{url('img/desa_depan.png')}}" class="img-fluid w-100" alt="">
        <div class="carousel-caption">
            <div class="container">
                <div class="row g-2 align-items-center">
                    <div class="col-lg-6 animated fadeInLeft">
                        <div class="text-sm-center text-md-start">
                            <h1 class="text-white text-uppercase fw-bold mb-4">Website Resmi Desa Sandingtaman</h1>
                            <p class="mb-1 fs-5">Sumber Informasi Terbaru Tentang Pemerintahan di Desa Sandingtaman
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 animated fadeInRight">
                        <div class="calrousel-img" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach ($berita as $item)
    <div class="header-carousel-item ">
        <img src="{{ url('/storage/berita/'.$item->gambar) }}" class="img-fluid w-100" alt="">
        <div class="carousel-caption">
            <div class="container">
                <div class="row g-2 align-items-center">
                    <div class="col-lg-6 animated fadeInLeft">
                        <div class="text-sm-center text-md-start">
                            <h1 class="text-black text-uppercase fw-bold mb-4">Website Resmi Desa Sandingtaman</h1>
                            <p class="mb-1 fs-5 text-dark fw-bold">Sumber Informasi Terbaru Tentang Pemerintahan di Desa Sandingtaman
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 animated fadeInRight">
                        <div class="text-sm-center">
                            <p class="text-dark mb-1 fs-5 text-decoration-underline fw-bold">{{$item->nama_berita}}</p>
                            <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="#selengkapnya">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 animated fadeInRight">
                        <div class="calrousel-img" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{-- <div class="header-carousel-item ">
        <img src="img/desa_depan.png" class="img-fluid w-100" alt="">

        <div class="carousel-caption">
            <div class="container">
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-5 animated fadeInLeft">
                        <div class="calrousel-img">
                        </div>
                    </div>
                    <div class="col-lg-7 animated fadeInRight">
                        <div class="text-sm-center text-md-end">
                            <h1 class="text-white text-uppercase fw-bold mb-4">Website Resmi Desa Sandingtaman</h1>
                            <p class="mb-5 fs-5">Sumber Informasi Terbaru Tentang Pemerintahan di Desa Sandingtaman
                            </p>
                            <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                <a class="btn btn-dark rounded-pill py-3 px-4 px-md-5 ms-2" href="#selengkapnya">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>

<div class="container-fluid bg-light about py-3">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-12 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item-content bg-white rounded p-2 h-100">
                    <div class="container">
                        <div class="row">
                            <div class="col"></div>
                          <div class="col">
                            <div class="w-75" style="width: 18rem;">
                                <img src="{{url('img/news.png')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="fs-6 text-center">Berita Desa</p>
                                </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="w-75" style="width: 18rem;">
                                <img src="{{url('img/info.png')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="fs-6 text-center">Informasi Desa</p>
                                </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="w-75" style="width: 18rem;">
                                <img src="{{url('img/image.png')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="fs-6 text-center">Galeri Desa</p>
                                </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="w-75" style="width: 18rem;">
                                <img src="{{url('img/pengurus.png')}}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="fs-6 text-center">Pengurus Desa</p>
                                </div>
                            </div>
                          </div>
                          <div class="col"></div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid blog" id="selengkapnya">
    <div class="container py-5">
        <div class="mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" >
            <h4 class="text-primary"> <a href="{{route('berita.terkini')}}">Berita <b> Terkini </b><i class="fa fa-arrow-right"></i></a></h4>
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
                        <p class="mb-3">{!! html_entity_decode(Str::limit($item->deskripsi, 50)) !!}</p>
                        {{-- <a href="#" class="btn p-0">Read More  <i class="fa fa-arrow-right"></i></a> --}}
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

<div class="container-fluid bg-light testimonial team">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-7 bg-white rounded wow fadeInLeft pb-5" data-wow-delay="0.2s">
                <div class="mx-auto wow fadeInUp py-2" data-wow-delay="0.2s">
                    <h4 class="text-primary"> <a href="{{route('strukturorganisasi')}}">Struktur <b> Organisasi </b><i class="fa fa-arrow-right"></i></a></h4>
                    <hr>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                    @if (count($aparat)>0)
                        @foreach ($aparat as $item)
                            
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="aparat">
                                    <div class="team-item ">
                                        <div class="team-img">
                                            <img src="{{ url('/storage/aparatur/'.$item->foto) }}" height="250px">

                                        </div>
                                        <div class="team-title p-4">
                                            <h4 class="mb-0">{{$item->nama}}</h4>
                                            <p class="mb-0">{{$item->jabatan}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @else
                    <div class="testimonial-item bg-light rounded">
                        <div class="row g-0">
                            <div class="col-6 ">
                                <div class="h-100">
                                    <span>Data Kosong</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-white rounded p-2 h-100">
                    <div class="row g-4 justify-content-center">
                        <div class="col-12">
                            <div class="rounded py-2">
                                <a href="{{route('kegiatan.terkini')}}"><h4 class="text-primary">Kegiatan <i class="fa fa-arrow-right"></i></h4></a>
                                <hr>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-0">
                            @foreach ($kegiatan as $item)
                            <div class="counter-item bg-light rounded p-3 mt-2">
                                <div class="container">
                                    <div class="row">
                                      <div class="p-3 col-4 bg-info rounded">
                                        <small class=" text-light"><i class="fa fa-calendar small text-primary"></i>  {{$item->tanggal_upload}}</small>
                                      </div>
                                      <div class="col-7">
                                        <a href="#" class="btn text-dark">{{$item->nama_kegiatan}}</a>
                                        <div class="ms-2 ">
                                            <small class="text-dark">Lokasi : {{$item->lokasi_kegiatan}}</small>
                                        </div>

                                      </div>
                                    </div>
                                  </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid blog">
    <div class="container py-3">
        <div class="mx-auto pb-3 wow fadeInUp" data-wow-delay="0.2s" >
            <h4 class="text-primary"> <a href="{{route('album.desa')}}"><b> Galeri </b><i class="fa fa-arrow-right"></i></a></h4>
            <hr>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
            @foreach ($galeri as $item)
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