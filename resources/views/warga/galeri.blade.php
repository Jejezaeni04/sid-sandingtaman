@extends('layout_warga.main')
@section('content')
<section class="py-0 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Album Desa Sandingtaman</h1>
      </div>
    </div>
  </section>

  <div class="container-fluid blog">
    <div class="container py-3">
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