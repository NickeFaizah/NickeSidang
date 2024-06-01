@extends('pelanggan.layout.index')

@section('content')
<head>
    <!-- Libraries Stylesheet -->
    {{-- <link href="lib/animate/animate.min.css" rel="stylesheet"> --}}
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<!--PreLoader-->
{{-- <div class="loader">
    <div class="loader-inner">
        <div class="circle"></div>
    </div>
</div> --}}
<!--PreLoader Ends-->

<!-- breadcrumb-section -->
<div class="breadcrumb-section" style="background-image: url({{ url('/') }}/assets/img/el.jpg)" ;>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Renyahkan Harimu...</p>
                    <h1>Elmuna Chips</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end breadcrumb section -->

<!-- featured section -->

<div class="card">
    <div class="card-body">
        {{-- <div class="row mt-4 align-items-center">
            <div class="col-md-5">
                <div class="content-text align-content-center">
                    Elmuna Chips merupakan sebuah iconic produk yang diproduksi oleh PT.Najiya Food, berbahan dasar pisang gepok yang diolah dengan berbagai varian rasa yang unik, menjadikan keripik pisang Elmuna Chips ini tersohor di wilayah Lampung.
                    Kesuksesan dalam pengenalan cita rasa yang tak biasa, produk ini terpilih menjadi produk promosi ekspor Indonesia, pada ajang Indonesia Trade Expo (ITE) tahun 2019 yang diselenggarakan di ICE BSD city Tangerang mewakilkan camilan khas
                    dari provinsi Lampung dengan melewati seleksi yang ketat. Mengenalkan beberapa varian seperti: Keripik pisang original, pedas, wijen, dan kacang. Seiring berjalannya waktu, PT. Najiya food juga terus berinovatif dan mengkreasikan berbagai macam rasa dan produk.
                    melainkan menjadi salah satu produk cemilan export Indonesia.
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/img/buyer.jpg') }}" style="width:80%" alt="">
    </div>
</div> --}}
<div class="product-section mt-100 mb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Our</span> Products</h3>
                    <p>Dari cita rasa yang menggoda hingga kualitas yang tak tertandingi, setiap produk adalah persembahan terbaik dari dedikasi kami untuk kualitas dan inovasi. Temukan pengalaman tiada tara dalam setiap kemasan</p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <img src="assets/img/keripik1.png" height="250" alt=""></a>
                            </div>
                            <h3>Munchips Caramel Sesame</h3>
                            <p class="product-price"><span>keripik pisang renyah dengan gula karamel dan taburan wijen asli</span></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <img src="assets/img/caramel.png" height="250" alt=""></a>
                            </div>
                            <h3>Munchips Peanut Caramel</h3>
                            <p class="product-price"><span>keripik pisang renyah dengan gula karamel dan taburan kacang gurih</span></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <img src="assets/img/pedes.png" height="250" alt=""></a>
                            </div>
                            <h3>Munchips Spicy Flavor</h3>
                            <p class="product-price"><span>keripik pisang renyah dengan cita rasa pedas cabai pilihan</span></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <img src="assets/img/pouch1.png" height="250" alt=""></a>
                            </div>
                            <h3>Munchips Spicy Flavor</h3>
                            <p class="product-price"><span>keripik pisang renyah dengan cita rasa pedas cabai pilihan</span></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <img src="assets/img/pouch2.png" height="250" alt=""></a>
                            </div>
                            <h3>Munchips Spicy Flavor</h3>
                            <p class="product-price"><span>keripik pisang renyah dengan cita rasa pedas cabai pilihan</span></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 text-center">
                        <div class="single-product-item">
                            <div class="product-image">
                                <img src="assets/img/pouch3.png" height="250" alt=""></a>
                            </div>
                            <h3>Munchips Spicy Flavor</h3>
                            <p class="product-price"><span>keripik pisang renyah dengan cita rasa pedas cabai pilihan</span></p>
                        </div>
                    </div>
                </div>
                <div class="cart-buttons text-center mb-4 col-lg-12">
                    <a href="/product" class="boxed-btn black">Beli Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end featured section -->

<!-- team section -->
{{-- <div class="card">
    <div class="card-body"> --}}
<div class="mt-148">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center mb-3">
                <div class="container text-center">
                    <h3>Our <span class="orange-text">Album</span></h3>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row">
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="event-img position-relative">
                            <img class="img-fluid rounded w-100" src="{{ asset('assets/img/cabe.jpg') }}" alt="">
                            {{-- <a href="assets/img/bi.jpg" data-lightbox="event-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a> --}}
                            {{-- <h4 class="text-center">Pendampingan Bank Indonesia</h4> --}}
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="event-img position-relative">
                            <img class="img-fluid rounded w-100" src="assets/img/hmm.jpg" alt="">
                            {{-- <a href="assets/img/bi.jpg" data-lightbox="event-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                    <h4 class="me-auto">Pendampingan Bank Indonesia</h4> --}}
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-3 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="event-img position-relative">
                            <img class="img-fluid rounded w-100" src="assets/img/hiya.jpg" alt="">
                            {{-- <a href="assets/img/bi.jpg" data-lightbox="event-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                    <h4 class="text-center">Pendampingan Bank Indonesia</h4> --}}
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="event-img position-relative">
                            <img class="img-fluid rounded w-100" src="assets/img/kac.jpg" alt="">
                            {{-- <a href="assets/img/bi.jpg" data-lightbox="event-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                    <h4 class="text-center">Pendampingan Bank Indonesia</h4> --}}
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="event-img position-relative">
                            <img class="img-fluid rounded w-100" src="assets/img/produk.jpg" alt="">
                            {{-- <a href="assets/img/bi.jpg" data-lightbox="event-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                    <h4 class="text-center">Pendampingan Bank Indonesia</h4> --}}
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="event-img position-relative">
                            <img class="img-fluid rounded w-100" src="assets/img/huhah.jpg" alt="">
                            {{-- <a href="assets/img/bi.jpg" data-lightbox="event-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                    <h4 class="text-center">Pendampingan Bank Indonesia</h4> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- </div>
</div> --}}
<!-- end team section -->

<!-- testimonail-section -->
{{-- <div class="testimonail-section mt-80 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="testimonial-sliders">
                    <div class="single-testimonial-slider">
                        <div class="client-avater">
                            <img src="assets/img/avaters/avatar1.png" alt="">
                        </div>
                        <div class="client-meta">
                            <h3>Saira Hakim <span>Local shop owner</span></h3>
                            <p class="testimonial-body">
                                " Sed ut perspiciatis unde omnis iste natus error veritatis et quasi architecto beatae
                                vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus
                                error sit voluptatem accusantium "
                            </p>
                            <div class="last-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial-slider">
                        <div class="client-avater">
                            <img src="assets/img/avaters/avatar2.png" alt="">
                        </div>
                        <div class="client-meta">
                            <h3>David Niph <span>Local shop owner</span></h3>
                            <p class="testimonial-body">
                                " Sed ut perspiciatis unde omnis iste natus error veritatis et quasi architecto beatae
                                vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus
                                error sit voluptatem accusantium "
                            </p>
                            <div class="last-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial-slider">
                        <div class="client-avater">
                            <img src="assets/img/avaters/avatar3.png" alt="">
                        </div>
                        <div class="client-meta">
                            <h3>Jacob Sikim <span>Local shop owner</span></h3>
                            <p class="testimonial-body">
                                " Sed ut perspiciatis unde omnis iste natus error veritatis et quasi architecto beatae
                                vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus
                                error sit voluptatem accusantium "
                            </p>
                            <div class="last-icon">
                                <i class="fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- end testimonail-section -->
@endsection
