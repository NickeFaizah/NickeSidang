@extends('pelanggan.layout.index')

@section('content')
<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Get 24/7 Support</p>
                    <h1>Contact us</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<div class="row mt-4 align-items-center">
    <div class="col-md-6">
        <div class="content-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti commodi delectus neque, quasi soluta non
            illum, similique quisquam nostrum iusto magni aspernatur esse. Ipsa cupiditate vitae est iusto labore culpa
            magnam fugit minima. Voluptate ipsam ad, neque voluptas ducimus perspiciatis praesentium natus iure delectus
            eaque officia dolores iste asperiores assumenda aliquam dignissimos! Ex odit accusantium ad quaerat, omnis
            atque
            minus velit dicta sapiente quam vel, temporibus eligendi! Nobis, molestiae hic praesentium reiciendis
            exercitationem in debitis quisquam. Totam dolores veritatis reprehenderit et voluptates iure, alias quam
            consequatur in cumque saepe eius, aperiam repellat temporibus aut? Nobis quam sunt fuga perspiciatis nemo
            reprehenderit similique tempora dolore, beatae fugiat, obcaecati expedita possimus. Quae fugit tempore,
            obcaecati excepturi unde laudantium eveniet ratione natus. Distinctio.
        </div>
    </div>
    <div class="col-md-6">
        <img src="{{ asset('assets/img/gbr.jpg') }}" style="width:100%" alt="">
    </div>
</div>

{{-- <div class="d-flex justify-content-lg-between mt-5">
    <div class="d-flex align-items-center gap-4">
        <i class="fa fa-users fa-2x"></i>
        <p class="m-0 fs-5">+ 300 Pelanggan</p>
    </div>
    <div class="d-flex align-items-center gap-4">
        <i class="fas fa-home fa-2x"> </i>
        <p class="m-0 fs-5"> +500 Seller</p>
    </div>
    <div class="d-flex align-items-center gap-4">
        <i class="fas fa-shirt fa-2x"></i>
        <p class="m-0 fs-5">+ 300 Product</p>
    </div>
</div> --}}
<!-- contact form -->
<div class="contact-from-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
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
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
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
<!-- end contact form -->

{{-- <h4 class="text-center mt-md-5 mb-md-2">Contact Us</h4>
<hr class="mb-5">
<div class="row  mb-md-5"> --}}
<!-- find our location -->
<div class="find-location blue-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p> <i class="fas fa-map-marker-alt"></i> Find Our Location</p>
            </div>
        </div>
    </div>
</div>
<!-- end find our location -->

<!-- google map section -->
<div class="embed-responsive embed-responsive-21by9">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26432.42324808999!2d-118.34398767954286!3d34.09378509738966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf07045279bf%3A0xf67a9a6797bdfae4!2sHollywood%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1576846473265!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe>
</div>
<!-- end google map section -->

{{-- <div class="col-md-7 mt-3 justify-center">
        <div class="card">
            <div class="card-header text-center">
                <h4>Kritik dan saran</h4>
            </div>
            <div class="card-body">
                <p class="p-0 mb-5 text-lg-center">Masukan kritik dan saran anda kepada aplikasi kami ini agar kami dapat memberikan
                    apa yang menjadi kebutuhan anda dan kami dapat berkembang lebih baik lagi.
                </p>
                <div class="mb-3 row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" value="" placeholder="Masukan email Anda">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="pesan" placeholder="Masukan Pesan Anda">
                    </div>
                </div>
                <button class="btn btn-primary mt-4 w-100"> Kirim pesan anda</button>
            </div>
        </div>
    </div> --}}
{{-- </div> --}}
@endsection
