<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Portal Desa Sandingtaman</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="icon" type="image/png" href="{{url('img/logo_cms.png')}}">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="{{url('lib/animate/animate.min.css')}}"/>
        <link href="{{url('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
        <link href="{{url('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{url('css/style.css')}}" rel="stylesheet">
        <link href="{{url('css/bagan.css')}}" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light"> 
                    <a href="#" class="navbar-brand p-0">
                        <h1 class="text-primary mb-0">                            
                            <img src="{{url('img/logo_cms.png')}}" alt="Logo">
                        </i> Desa Sandingtaman</h1>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-0 mx-lg-auto">
                            <a href="/" class="nav-item nav-link {{ (Route::is('/')) ? 'active' : ''}}">Home</a>
                            <div class="nav-item dropdown {{ (Route::is('visimisi','tentang')) ? 'active' : ''}}">
                                <a href="#" class="nav-link " data-bs-toggle="dropdown">
                                    <span class="dropdown-toggle">Profile Desa</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="{{route('tentang')}}" class="dropdown-item { (Route::is('tentang')) ? 'active' : ''}}">Tentang Desa</a>
                                    <a href="{{route('visimisi')}}" class="dropdown-item {{ (Route::is('visimisi')) ? 'active' : ''}}">Visi & Misi</a>
                                </div>
                            </div>
                            <div class="nav-item dropdown {{ (Route::is('strukturorganisasi','perangkat.desa')) ? 'active' : ''}}">
                                <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                    <span class="dropdown-toggle">Pemerintahan</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="{{route('strukturorganisasi')}}" class="dropdown-item {{ (Route::is('strukturorganisasi')) ? 'active' : ''}}">Struktur Organisasi</a>
                                    <a href="{{route('perangkat.desa')}}" class="dropdown-item {{ (Route::is('perangkat.desa')) ? 'active' : ''}}">Perangkat Desa</a>
                                    {{-- <a href="" class="dropdown-item">Lembaga Desa</a> --}}
                                </div>
                            </div>
                            <div class="nav-item dropdown {{ (Route::is('berita.terkini','kegiatan.terkini','wilayah.index')) ? 'active' : ''}}">
                                <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                    <span class="dropdown-toggle">Informasi</span>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="{{route('berita.terkini')}}" class="dropdown-item {{ (Route::is('berita.terkini')) ? 'active' : ''}}">Berita</a>
                                    <a href="{{route('kegiatan.terkini')}}" class="dropdown-item {{ (Route::is('kegiatan.terkini')) ? 'active' : ''}}">Kegiatan</a>
                                    <a href="{{route('wilayah.index')}}" class="dropdown-item {{ (Route::is('wilayah.index')) ? 'active' : ''}}">Wilayah</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Modal Search Start -->

        <!-- Modal Search End -->


        <!-- Carousel Start -->
        
        <!-- Carousel End -->

        <!-- Feature Start -->
        @yield('content')
        @include('sweetalert::alert')

        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container">
                <footer class="row row-cols-5 my-5 border-top">
                    <div class="col">
                      <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                      </a>
                      <p class="text-muted">&copy; 2021</p>
                    </div>
                
                    <div class="col">
                
                    </div>
                
                    <div class="col">
                      <h5>Section</h5>
                      <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                      </ul>
                    </div>
                
                    <div class="col">
                      <h5>Section</h5>
                      <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                      </ul>
                    </div>
                
                    <div class="col">
                      <h5>Section</h5>
                      <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                      </ul>
                    </div>
                  </footer>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        {{-- <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-end mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-start text-body">
                        Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom text-white" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Copyright End -->


        <!-- Back to Top -->
        <div>
            <button type="button" class="btn btn-primary rounded pengaduan" data-bs-toggle="modal" data-bs-target="#exampleModal">Pengaduan</button>
  
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Pengaduan atau Saran Warga</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('pengaduan.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-0 row">
                                    <label for="recipient-name" class="col-sm-5 col-form-label">Nama : <small class="text-danger">*</small></label>
                                    <div class="col-sm-7">
                                        <input type="text" name="nama_pengadu" class="form-control form-control-sm" id="recipient-name" required>
                                    </div>
                                </div>
                                <div class="mb-0 row">
                                    <label for="recipient-name" class="col-sm-5 col-form-label">Alamat : <small class="text-danger">*</small></label>
                                    <div class="col-sm-7">
                                        <select class="form-control form-control-sm" id="inputGroupSelect01" name="alamat_pengadu" required>
                                            <option selected>Pilih Alamat Anda</option>
                                            @if (count($dusun)>0)
                                            @foreach ($dusun as $item)
                                            <option name="alamat_pengadu" value="{{$item->nama_dusun}}">{{$item->nama_dusun}}</option>
                                            @endforeach
                                        @else
                                            
                                        @endif
                                          </select>
                                    </div>
                                </div>
                                <div class="mb-0 row">
                                    <label for="recipient-name" class="col-sm-5 col-form-label">Nomor Telepon/WA : <small class="text-danger">*</small></label>
                                    <div class="col-sm-7">
                                        <input type="text" name="nohp" class="form-control form-control-sm" id="recipient-name" required>
                                    </div>
                                </div>
                                <div class="mb-0 row">
                                    <label for="recipient-name" class="col-sm-5 col-form-label">Kategori : <small class="text-danger">*</small></label>
                                    <div class="col-sm-7">
                                        <select class="form-control form-control-sm" id="inputGroupSelect01" name="jenis_keterangan" required>
                                            <option selected>Pilih Jenis Keterangan</option>
                                            <option name="jenis_keterangan" value="Pengaduan">Pengaduan</option>
                                            <option name="jenis_keterangan" value="Saran">Saran</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="mb-0 row">
                                    <label for="recipient-name" class="col-sm-5 col-form-label">Isi Keterangan : <small class="text-danger">*</small></label>
                                    <div class="col-sm-7">
                                        <textarea class="form-control" name="isi_keterangan" rows="5" placeholder="Masukkan Isi Keterangan" required>{{ old('isi_keterangan') }}</textarea>
                                    </div>
                                </div>
                                <div class="mb-0 row">
                                    <label for="recipient-name" class="col-sm-5 col-form-label">Foto : </label>
                                    <div class="col-sm-7">
                                        <input type="file" class="form-control form-control-sm" id="customFile" accept="image/*" multiple onchange="showFiles(this)" name="gambar">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a> 
             
        </div>
        
        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('lib/wow/wow.min.js')}}"></script>
        <script src="{{url('lib/easing/easing.min.js')}}"></script>
        <script src="{{url('lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{url('lib/counterup/counterup.min.js')}}"></script>
        <script src="{{url('lib/lightbox/js/lightbox.min.js')}}"></script>
        <script src="{{url('lib/owlcarousel/owl.carousel.min.js')}}"></script>
        

        <!-- Template Javascript -->
        <script src="{{url('js/main.js')}}"></script>
        

</html>