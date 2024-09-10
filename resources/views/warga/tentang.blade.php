@extends('layout_warga.main')
@section('content')
<div class="container-fluid bg-light about py-3">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-12 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item-content bg-white rounded p-2">
                    <a href="{{route('/')}}" class="text-dark"><i class= "fa fa-home"></i></a>
                    <i class="fa fa-arrow-right small"></i>
                    <a href="#" class="text-dark">Profile Desa</a>
                    <i class="fa fa-arrow-right small"></i>
                    <a href="#">Tentang Kami</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-light about py-3">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-12 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item-content bg-white rounded p-5">
                        <h4 class="text-primary">Tentang kami</h4>
                        <h1 class="display-4 mb-4">Profile Desa Sandingtaman</h1>
                        @foreach ($sejarah as $item)
                        <p class="mb-0">{!!$item->deskripsi!!}</p>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection