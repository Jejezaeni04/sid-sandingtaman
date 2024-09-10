@extends('layout_warga.main')
@section('content')
<div class="container-fluid bg-light about py-3">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-12 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item-content bg-white rounded p-2">
                    <a href="{{route('/')}}" class="text-dark"><i class= "fa fa-home"></i></a>
                    <i class="fa fa-arrow-right small"></i>
                    <a href="#" class="text-dark">Pemerintahan</a>
                    <i class="fa fa-arrow-right small"></i>
                    <a href="#">Perangkat Desa</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid team bg-white">
    <div class="container py-3">
        <div class="text-center mx-auto pb-4 wow fadeInUp bg-white rounded" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary pt-2">Perangkat Desa Sandingtaman</h4>
            <hr>
        </div>
        <div class="row g-4 bg-white pt-2 rounded">
               @if (count($aparatur)>0)
                  @foreach ($aparatur as $aparat)  
               <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp pb-3" data-wow-delay="0.2s">
                <div class="aparat text-center">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="{{ url('/storage/aparatur/'.$aparat->foto) }}" height="360px">
                            <div class="team-icon">
                             <div class="small text-center">
                                 <a class="btn btn-light rounded mb-0" href=""><small>{{$aparat->email}}</small></a>
                                 <a class="btn btn-light rounded mb-0" href=""><small>{{$aparat->nohp}}</small></a>
                                 <a class="btn btn-light rounded mb-0" href=""><small>{{$aparat->alamat}}</small></a>
                             </div>
                            </div>
                        </div>
                        <div class="team-title p-4 text-center">
                            <h4 class="mb-0">{{$aparat->nama}}</h4>
                            <p class="mb-0">{{$aparat->jabatan}}</p>
                        </div>
                    </div>
                </div>
               </div>
               @endforeach 
            @else
            <div class="card-body">
                Data Kosong
              </div>
           </div>
        @endif
    </div>
</div>
@endsection