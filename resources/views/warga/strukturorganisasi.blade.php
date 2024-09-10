@extends('layout_warga.main')
@section('content')
<div class="container-fluid bg-light about py-3">
    <div class="container">
        <div class="row g-5">
            <div class="col-sm-12 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item-content bg-white rounded p-2 h-100">
                    <h4 class="text-primary text-center">Struktur Organisasi</h4>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-light about ">
    <div class="container">
        <div class="row g-5">
            <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-item-content bg-white rounded p-3 h-100">
                    <div class="bg-light rounded">
                        <h4 class="text-primary text-center">Perangkat Desa</h4>
                        <div class="ms-2">
                            <a href="#" class="btn p-0">  <i class="fa fa-caret-right"></i>@foreach ($aparat->where('jabatan', 'Kepala Desa') as $item)
                                {{$item->jabatan}}
                                @endforeach</a>      
                        </div>
                        <div class="ms-2">
                            <a href="#" class="btn p-0">  <i class="fa fa-caret-right"></i>@foreach ($aparat->where('jabatan', 'Sekertaris Desa') as $item)
                                {{$item->jabatan}}
                                @endforeach</a>  
                        </div>
                        <div class="ms-2">
                             <a href="#" class="btn p-0">  <i class="fa fa-caret-right"></i>@foreach ($aparat->where('jabatan', 'Kaur Umum') as $item)
                                {{$item->jabatan}}
                                @endforeach</a>      
                        </div>
                        <div class="ms-2">
                             <a href="#" class="btn p-0">  <i class="fa fa-caret-right"></i>@foreach ($aparat->where('jabatan', 'Kaur Keuangan') as $item)
                                {{$item->jabatan}}
                                @endforeach</a> 
                        </div>
                        <div class="ms-2">
                            <a href="#" class="btn p-0">  <i class="fa fa-caret-right"></i>@foreach ($aparat->where('jabatan', 'Kaur Perencanaan') as $item)
                                {{$item->jabatan}}
                                @endforeach</a>    
                        </div>
                        <div class="ms-2">
                            <a href="#" class="btn p-0">  <i class="fa fa-caret-right"></i>@foreach ($aparat->where('jabatan', 'Kasi Pemerintahan') as $item)
                                {{$item->jabatan}}
                            @endforeach</a>
                        </div>
                        <div class="ms-2">
                           <a href="#" class="btn p-0">  <i class="fa fa-caret-right"></i>@foreach ($aparat->where('jabatan', 'Kasi Kesehatan') as $item)
                                {{$item->jabatan}}
                            @endforeach</a>      
                        </div>
                        <div class="ms-2">
                          <a href="#" class="btn p-0">  <i class="fa fa-caret-right"></i>@foreach ($aparat->where('jabatan', 'Kasi Pelayanan') as $item)
                                {{$item->jabatan}}
                            @endforeach</a>  
                        </div>
                        <div class="ms-2">
                           <a href="#" class="btn p-0">  <i class="fa fa-caret-right"></i>@foreach ($aparat->where('jabatan', 'Kepala Dusun Citaman') as $item)
                                {{$item->jabatan}}
                            @endforeach</a>   
                        </div>
                        <div class="ms-2">
                           <a href="#" class="btn p-0">  <i class="fa fa-caret-right"></i>@foreach ($aparat->where('jabatan', 'Kepala Dusun Karoya') as $item)
                                {{$item->jabatan}}
                            @endforeach</a>    
                        </div>
                        <div class="ms-2">
                            <a href="#" class="btn p-0">  <i class="fa fa-caret-right"></i>@foreach ($aparat->where('jabatan', 'Kepala Dusun Cipicung') as $item)
                                {{$item->jabatan}}
                            @endforeach</a>     
                        </div>
                        <div class="ms-2">
                            <a href="#" class="btn p-0">  <i class="fa fa-caret-right"></i>@foreach ($aparat->where('jabatan', 'Kepala Dusun Sindangjaya') as $item)
                                {{$item->jabatan}}
                            @endforeach</a>   
                        </div>
                        <div class="ms-2">
                           <a href="#" class="btn p-0">  <i class="fa fa-caret-right"></i>@foreach ($aparat->where('jabatan', 'Kepala Dusun Cidarma') as $item)
                                {{$item->jabatan}}
                            @endforeach</a>    
                        </div>
                        <div class="ms-2">
                           <a href="#" class="btn p-0">  <i class="fa fa-caret-right"></i>@foreach ($aparat->where('jabatan', 'Kepala Dusun Nanggela') as $item)
                                {{$item->jabatan}}
                            @endforeach</a>
                        </div>
                        <div class="ms-2">
                            <a href="#" class="btn p-0">  <i class="fa fa-caret-right"></i>@foreach ($aparat->where('jabatan', 'Kepala Dusun Sanding') as $item)
                                {{$item->jabatan}}
                            @endforeach</a>  
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-white rounded p-3 h-100">
                    <div class="row bg-light rounded">
                        <img src="{{url('img/struktur.jpg')}}" class="img-fluid rounded w-100" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection