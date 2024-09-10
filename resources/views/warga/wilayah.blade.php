@extends('layout_warga.main')
@section('content')
<div class="container-fluid team bg-light">
    <div class="container py-3">
        <div class="text-center mx-auto pb-4 wow fadeInUp bg-white rounded p-4" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary pt-2">INFOGRAFI DESA SANDINGTAMAN</h4>
            <hr>
            <div class="row">
                <div class="col-12 text-center">
                    Memberikan informasi lengkap mengenai karakteristik demografi penduduk suatu wilayah.
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid team bg-light">
    <div class="container py-3">
        <div class="text-center mx-auto pb-4 wow fadeInUp bg-white rounded p-4" data-wow-delay="0.2s" >
            <div class="row text-center mx-auto pb-4 wow fadeInUp bg-white rounded py-2">
                <div class=" fadeInUp" data-wow-delay="0.2s">
                    <div class="row g-4">
                        @if (count($wilayah)>0)
                        @foreach ($wilayah as $item)
                        <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp ">
                            <a href="{{route('wilayah.show',$item->id)}}"> 
                                <div class=" bg-light rounded">
                                    <div class="row g-0">
                                        <div class="col-4 col-lg-4 col-xl-3">
                                            <div class="h-100">
                                                @if ($item->gambar == 'default.png')
                                                <img src="{{url('img/'.$item->gambar)}}" class="img-fluid h-100 rounded" style="object-fit: cover;" alt="">
                                                @else
                                                <img src="{{url('/storage/penduduk/'.$item->gambar)}}" class="img-fluid h-100 rounded" style="object-fit: cover;" alt="">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-8 col-lg-8 col-xl-9">
                                            <div class="d-flex flex-column my-auto text-start p-4">
                                                <h4 class="text-dark">{{$item->nama_dusun}}</h4>
                                                <p class="text-dark">Kepala Dusun : <b>{{$item->nama_aparat}}</b></p>
                                                <p class="text-dark">Luas Wilayah : <b>{{$item->luas_wilayah}}</b></p>
                                                <p class="text-dark">Jumlah Penduduk : <b>{{$item->jumah_penduduk}}</b></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        @else
                        <div class="col-md-12 col-lg-12 col-xl-12 wow fadeInUp ">
                                <div class=" bg-light rounded">
                                    <div class="row g-0">
                                        <div class="col-12 col-lg-12 col-xl-12">
                                            <div class="d-flex flex-column my-auto text-start p-4">
                                                <p class="mb-0">Data Belum Tersedia</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        @endif
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection