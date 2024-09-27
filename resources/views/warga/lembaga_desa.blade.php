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
<center>
  <div class="container-fluid bg-light">
      <div class="container">
          <div class="row g-5">
              <div class="col-sm-12 wow fadeInLeft" data-wow-delay="0.2s">
                  <div class="card" style="width: 50rem;">
                      @foreach ($bagan->where('kategori','Perangkat Desa') as $item)
                          <img src="{{ url('/storage/bagan/'.$item->gambar_bagan) }}" class="card-img-top" alt="">
                          <div class="card-body">
                            <p class="card-text">{!!$item->deskripsi!!}</p>
                          </div>
                          @endforeach
                    </div>
              </div>
          </div>
      </div>
  </div>
</center>
<div class="container-fluid bg-light about py-3">
    <div class="container">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Susunan Pengurus BPD Desa Sandingtaman
                </button>
              </h2>
              <center>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  <div class="card" style="width: 50rem;">
                    @foreach ($bagan->where('kategori','BPD') as $item)
                        <img src="{{ url('/storage/bagan/'.$item->gambar_bagan) }}" class="card-img-top" alt="">
                        <div class="card-body">
                          <p class="card-text">{!!$item->deskripsi!!}</p>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </center>
            </div>
            {{-- <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  Accordion Item #2
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
              </div>
            </div> --}}
            {{-- <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  Accordion Item #3
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
              </div>
            </div> --}}
          </div>
    </div>
</div>
@endsection