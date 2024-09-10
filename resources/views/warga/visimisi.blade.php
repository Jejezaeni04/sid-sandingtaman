@extends('layout_warga.main')
@section('content')
<div class="container-fluid bg-light about py-3">
    <div class="container">
        <div class="row g-5">
            <div class="col-sm-12 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item-content bg-white rounded p-2 h-100">
                    <h4 class="text-primary text-center">VISI & MISI</h4>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-light about py-3">
    <div class="container">
        @foreach ($vismis as $item)      
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item-content bg-white rounded p-3 h-100">
                    <h4 class="text-primary text-center">VISI</h4>
                    <p>{!! $item->visi !!}</p>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item-content bg-white rounded p-3 h-100">
                    <h4 class="text-primary text-center">MISI</h4>
                    <p>{!! $item->misi !!}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection