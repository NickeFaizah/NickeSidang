@extends('pelanggan.layout.index')

@section('content')

{{-- <div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/beige.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div> --}}

<div class="breadcrumb-section" style="background-image: url(assets/img/beige.jpg);">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-1 text-left">
                <div class="breadcrumb-text">
                    <h1>Nikmati Harimu Dengan Rasa Yang Unik</h1>
                    <p class="text-justify">Cemilan renyah olahan pisang kepok Lampung yang diproses dengan bahan alami dan teknologi modern</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end of breadcrumb section -->
{{-- <div class="content mt-5 img-fluid text-bg-dark">
    <img src="assets/img/feel.png" class="card-img" alt="..." style="max-width:100%; height:auto;">
</div> --}}

<h3 class="text-center mt-md-5 mb-md-2 font-weight-bold">About Us</h3>
<hr class="mb-5">

<div class="container">
    <div class="row justify-content-around align-items-start">
        <!-- about image -->
        <div class="col-sm-6 col-md-5 col-xl-4" style="margin-bottom: 20px;">
            <div class="about-img">
                <img src="assets/img/buyer.jpg" class="img-fluid rounded shadow" alt="">
            </div>
        </div>
        <!-- about content -->
        <div class="col-sm-6 col-md-7 col-xl-7">
            <div class="about-content" style="text-align: justify">
                <p><span class="font-weight-light">
                        Elmuna Chips merupakan sebuah iconic produk yang diproduksi oleh PT.Najiya Food, berbahan dasar pisang gepok yang diolah dengan berbagai varian rasa yang unik, menjadikan keripik pisang Elmuna Chips ini tersohor di wilayah Lampung.
                        Kesuksesan dalam pengenalan cita rasa yang tak biasa, produk ini terpilih menjadi produk promosi ekspor Indonesia, pada ajang Indonesia Trade Expo (ITE) tahun 2019 yang diselenggarakan di ICE BSD city Tangerang mewakilkan camilan khas
                        dari provinsi Lampung dengan melewati seleksi yang ketat. Mengenalkan beberapa varian seperti: Keripik pisang original, pedas, wijen, dan kacang. Seiring berjalannya waktu, PT. Najiya food juga terus berinovatif dan mengkreasikan berbagai macam rasa dan produk.
                        melainkan menjadi salah satu produk cemilan export Indonesia.
                    </span></p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-around align-items-start">
        <!-- about content -->
        <div class="col-sm-6 col-md-7 col-xl-7">
            <div class="about-content" style="text-align: justify">
                <h3><span class="orange-text">Visi</span> Misi</h3>
                <p><span class="font-weight-light">
                        Najiya food memiliki sebuah <strong>visi</strong> yang dimana dapat menjadi salah satu produsen industry makanan ringan (keripik) terbaik dan terbesar di Indonesia, yang disukai seluruh lapisan masyarakat baik nasional maupun internasional dengan senantiasa mengutamakan cita rasa yang khas dan berkualitas. Hal ini didorong dengan misi dapat beradaptasi dan bertahan dalam kondisi apapun, dapat dipercaya dan dapat diandalkan,
                        turut serta memberikan kontribusi yang positif terhadap lingkungan dan negara, serta tentu menjadi oleh-oleh khas Lampung.
                    </span></p>
            </div>
        </div>
        <!-- about image -->
        <div class="col-sm-6 col-md-5 col-xl-4">
            <div class="about-img">
                <img src="assets/img/banner1.png" class="img-fluid rounded shadow" alt="">
            </div>
        </div>
    </div>
</div>


<!-- product section -->
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
                </div>
                <div class="cart-buttons text-center mb-4 col-lg-12">
                    <a href="/about" class="boxed-btn black">detail lainnya</a>
                </div>
                {{-- <div class="cart-buttons text-center mb-4 col-lg-12">
                    <a href="/product" class="boxed-btn black">Beli Sekarang</a>
                </div> --}}
            </div>
        </div>
    </div>
</div>

<h4 class="mt-5">New Product</h4>
<div class="content mt-3 d-flex flex-lg-wrap gap-2 mb-5">
    @if ($data->isEmpty())
    <h1>Belum ada product ...!</h1>
    @else
    <div class="d-flex flex-wrap mb-4 gap-3">
        @foreach ($data as $p)
        <div class="card" style="width:210px;">
            <div class="card-header m-auto">
                <img src="{{ asset('storage/product/' . $p->foto) }}" alt="munchips 1" style="width: 100%;height:200px; object-fit: cover; padding:0;">
            </div>
            <div class="card-body">
                <p class="m-0 text-center"> {{ $p->nama_product }} </p>
            </div>
            {{-- <div class="card-footer d-flex flex-row justify-content-between align-items-center"> --}}
            {{-- <p class="m-0" style="font-size: 16px; font-weight:600;"><span>IDR
                </span>{{ number_format($p->harga) }}</p> --}}
            {{-- <form action="{{route('addTocart')}}" method="POST">
            @csrf
            <input type="hidden" name="idProduct" value="{{$p->id}}">
            <button type="submit" class="btn btn-outline-primary" style="font-size:24px">
                <i class="fa-solid fa-cart-plus"></i>
            </button>
            </form> --}}
            {{-- </div> --}}
        </div>
        @endforeach
    </div>
</div>
<!-- Pagination -->
<div class="pagination d-flex flex-row justify-content-between">
    <div class="showData">
        Data ditampilkan {{ $data->count() }} dari {{ $data->total() }}
    </div>
    <div>
        {{ $data->links() }}
    </div>
</div>

<div class="card">
    <div class="card-body">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="featured-text">
                        <h2 class="pb-3 text-center">Why <span class="orange-text">Elmuna Chips</span></h2>
                        <div class="row mt-3">
                            <div class="col-lg-6 col-md-6 mb-4 mb-md-5">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-shipping-fast"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Home Delivery</h3>
                                        <p>Pengiriman tersedia untuk keseluruh penjuru nusantara, dari sabang hingga merauke dengan pengemasan aman dan rapih. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-money-bill-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Best Price</h3>
                                        <p>Harga bersahabat dan tidak bikin kantong jebol pastinya, nikmati kelezatan serta rasa yang unik dengan mudah</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-briefcase"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Custom Box</h3>
                                        <p>Varian pengemasan pun beragam dan dapat menyesuaikan keinginan serta kebutuhan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="list-box d-flex">
                                    <div class="list-icon">
                                        <i class="fas fa-sync-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Quick Refund</h3>
                                        <p>Tak perlu khawatir untuk melaporkan kepada kami jika produk mengalami kerusakan, maka uang akan kembali sesuai ketentuan yang berlaku</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-149">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center mb-3">
                        <div class="container text-center">
                            <h3>Our <span class="orange-text">Event</span></h3>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 100%">
                    <div class="card-header">
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane fade show p-0 active">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="event-img position-relative">
                                            <img class="rounded float-start" src="{{ asset('assets/img/bi.jpg') }}" alt="">
                                            <a href="assets/img/bi.jpg" data-lightbox="event-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            {{-- <h4 class="text-center">Pendampingan Bank Indonesia</h4> --}}
                                            {{-- <p class="text-justify">Pendampingan bina UMKM bersama Bank Indonesia di Jakarta dengan rentetan kegiatan siklus perdagangan bisnis</p> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100" src="assets/img/poto.jpg" alt="">
                                            <a href="assets/img/bi.jpg" data-lightbox="event-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            {{-- <h4 class="text-center">Pendampingan Bank Indonesia</h4> --}}
                                            {{-- <p class="text-justify">Pendampingan bina UMKM bersama Bank Indonesia di Jakarta dengan rentetan kegiatan siklus perdagangan bisnis</p> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100" src="assets/img/ok.jpg" alt="">
                                            <a href="assets/img/bi.jpg" data-lightbox="event-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            {{-- <h4 class="text-center">Pendampingan Bank Indonesia</h4> --}}
                                            {{-- <p class="text-justify">Pendampingan bina UMKM bersama Bank Indonesia di Jakarta dengan rentetan kegiatan siklus perdagangan bisnis</p> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100" src="assets/img/mandiri.jpg" alt="">
                                            <a href="assets/img/bi.jpg" data-lightbox="event-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            {{-- <h4 class="text-center">Pendampingan Bank Indonesia</h4> --}}
                                            {{-- <p class="text-justify">Pendampingan bina UMKM bersama Bank Indonesia di Jakarta dengan rentetan kegiatan siklus perdagangan bisnis</p> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100" src="assets/img/livin.jpg" alt="">
                                            <a href="assets/img/bi.jpg" data-lightbox="event-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            {{-- <h4 class="text-center">Pendampingan Bank Indonesia</h4> --}}
                                            {{-- <p class="text-justify">Pendampingan bina UMKM bersama Bank Indonesia di Jakarta dengan rentetan kegiatan siklus perdagangan bisnis</p> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="event-img position-relative">
                                            <img class="img-fluid rounded w-100" src="assets/img/urban.jpg" alt="">
                                            <a href="assets/img/bi.jpg" data-lightbox="event-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                            {{-- <h4 class="text-center">Pendampingan Bank Indonesia</h4> --}}
                                            {{-- <p class="text-justify">Pendampingan bina UMKM bersama Bank Indonesia di Jakarta dengan rentetan kegiatan siklus perdagangan bisnis</p> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonail-section -->
        <div class="testimonail-section mt-80 mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 text-center">
                        <div class="testimonial-sliders">
                            <div class="single-testimonial-slider">
                                <div class="client-avater">
                                    <img src="assets/img/azki.jpg" alt="">
                                </div>
                                <div class="client-meta">
                                    <h3>Rizka Azkia <span>Mahasiswi Program Studi Gizi UNIDA</span></h3>
                                    <p class="testimonial-body">
                                        " Varian rasanya banyak, harganya juga terjangkau dengan cita rasa dan komposisi sebanyak itu. Paling favorit itu rasa Peanut Caramel. Gak bikin bosen, apalagi bisa milih banyak rasa, mantapp deh pokoknya!"
                                    </p>
                                    <div class="last-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial-slider">
                                <div class="client-avater">
                                    <img src="assets/img/pip.jpg" alt="">
                                </div>
                                <div class="client-meta">
                                    <h3>Afifah Nurhaliza<span>Mahasiswi Program Studi Hubungan Internasional UNIDA</span></h3>
                                    <p class="testimonial-body">
                                        " Saya suka el Muna chips itu dari segi rasanya yang tidak terlalu manis. Rasa favorite saya itu rasa coklatnya.
                                        Selain rasa coklat, rasa andalan saya itu ada di rasa wijen. That's so delicious.
                                        Selain itu, potongan pisang yang tidak terlalu besar, juga membuat enak untuk memakannya istilahnya one bite.
                                        Untuk harga, menurut saya sudah sangat terjangkau dengan isi yang banyak dan rasa yang enak. "
                                    </p>
                                    <div class="last-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial-slider">
                                <div class="client-avater">
                                    <img src="assets/img/hau.png" alt="">
                                </div>
                                <div class="client-meta">
                                    <h3>Haura Nailul <span>Mahasiswi Program Studi Managemen Bisnis UNIDA</span></h3>
                                    <p class="testimonial-body">
                                        "Chipsnya itu enak banget, apalagi best seller banget yang rasa coklat, coklatnya ga pelit sangat berlimpah.
                                        Cocok banget buat temen ngemil bareng keluarga atau temen, harga udah pasti ramah di kantong pelajar dengan kuantitas dan kualitas yang oke banget. Selain itu juga varian rasanya banyak,
                                        jadi bisa ngerasain rasa yang berbeda tiap harinya. "
                                    </p>
                                    <div class="last-icon">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial-slider">
                                <div class="client-avater">
                                    <img src="assets/img/eng.jpg" alt="">
                                </div>
                                <div class="client-meta">
                                    <h3>Dwi Anggraini <span>Mahasiswi Program Studi Farmasi UNIDA</span></h3>
                                    <p class="testimonial-body">
                                        " El muna camilan yang sangat cocok untuk menemani waktu istirahat kita, elmuna juga dibuat dari pisang pilihan dan memiliki bahan2 pelengkap yang berkualitas, hal ini menjadikan elmuna camilan yang sangat layak untuk dikonsumsi dengan harga yang relatif murah dan rasa yang sangat lezat🤤 "
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
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Contact</span> Us</h3>
                    {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet
                        beatae optio.</p> --}}
                </div>
            </div>
            <!-- contact form -->

            <div class="card-header">
                <div class="contact-from-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 mb-5 ml-5">
                                <div class="form-title">
                                    <h2>Have you any question?</h2>
                                    <p>Masukan kritik dan saran anda kepada layanan kami ini agar kami dapat memberikan
                                        apa yang menjadi kebutuhan anda dan kami dapat berkembang lebih baik lagi</p>
                                </div>
                                <div id="form_status"></div>
                                <div class="contact-form">
                                    <form type="POST" id="fruitkha-contact" onSubmit="return valid_datas( this );">
                                        <p>
                                            <input type="text" placeholder="Name" name="name" id="name">
                                            <input type="email" placeholder="Email" name="email" id="email">
                                        </p>
                                        <p>
                                            <input type="tel" placeholder="Phone" name="phone" id="phone">
                                            <input type="text" placeholder="Subject" name="subject" id="subject">
                                        </p>
                                        <p>
                                            <textarea name="message" id="message" cols="25" rows="10" placeholder="Message"></textarea>
                                        </p>
                                        <input type="hidden" name="token" value="FsWga4&@f6aw" />
                                        <p><input type="submit" value="Submit"></p>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="contact-form-wrap">
                                    <div class="contact-form-box">
                                        <h4><i class="fas fa-map"></i> Shop Address</h4>
                                        <p>Najiya Food, Desa, RT.02/RW.03, Bumi Restu, Kec. Abung Surakarta, kab. Lampung Utara, Lampung 34584</p>
                                    </div>
                                    <div class="contact-form-box">
                                        <h4><i class="far fa-clock"></i> Shop Hours</h4>
                                        <p>MON - FRIDAY: 8 to 9 PM <br> SAT - SUN: 10 to 8 PM </p>
                                    </div>
                                    <div class="contact-form-box">
                                        <h4><i class="fas fa-address-book"></i> Contact</h4>
                                        <p>Phone: 085783641373 <br> Email: najiyafood.indonesia@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end contact form -->

            <div class="find-location blue-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <p> <i class="fas fa-map-marker-alt"></i> Find Our Location</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- google map section -->
            <div class="embed-responsive embed-responsive-21by9">
                <iframe src="//www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7774.908984021536!2d105.03372169602079!3d-4.76607383733074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3f53054a49f345%3A0x6c7acde6cbd82985!2sNajiya%20Food!5e0!3m2!1sid!2sid!4v1711116705874!5m2!1sid!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe>
            </div>
            <!-- end google map section -->
        </div>
    </div>
</div>
<!-- end testimonail-section -->

@endif

@endsection
