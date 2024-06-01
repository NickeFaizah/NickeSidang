<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/custome.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> --}}

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ url('assets') }}/bootstrap/css/bootstrap.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ url('assets') }}/css/all.min.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ url('assets') }}/css/owl.carousel.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ url('assets') }}/css/magnific-popup.css">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ url('assets') }}/css/animate.css">
    <!-- mean menu css -->
    <link rel="stylesheet" href="{{ url('assets') }}/css/meanmenu.min.css">
    <!-- main style -->
    <link rel="stylesheet" href="{{ url('assets') }}/css/main.css">
    <!-- responsive -->
    <link rel="stylesheet" href="{{ url('assets') }}/css/responsive.css">
    <title>Elmuna Chips | {{ $title }}</title>
</head>

<body>
    <main class="mainuser" name="maina">
        <header>
            @include('pelanggan.component.navbar')
        </header>
        <section class="container">
            <div>
                @yield('content')
            </div>
        </section>
        <footer>
            <div class="container">
                @include('pelanggan.component.footer')
            </div>
        </footer>
    </main>

    @include('pelanggan.modal.loginPelanggan')
    @include('pelanggan.modal.registerPelanggan')

    <!-- jquery -->
    <script src="{{ url('assets') }}/js/jquery-1.11.3.min.js"></script>
    {{-- sweetalert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- bootstrap -->
    <script src="{{ url('assets') }}/bootstrap/js/bootstrap.min.js"></script>
    <!-- count down -->
    <script src="{{ url('assets') }}/js/jquery.countdown.js"></script>
    <!-- isotope -->
    <script src="{{ url('assets') }}/js/jquery.isotope-3.0.6.min.js"></script>
    <!-- waypoints -->
    <script src="{{ url('assets') }}/js/waypoints.js"></script>
    <!-- owl carousel -->
    <script src="{{ url('assets') }}/js/owl.carousel.min.js"></script>
    <!-- magnific popup -->
    <script src="{{ url('assets') }}/js/jquery.magnific-popup.min.js"></script>
    <!-- mean menu -->
    <script src="{{ url('assets') }}/js/jquery.meanmenu.min.js"></script>
    <!-- sticker js -->
    <script src="{{ url('assets') }}/js/sticker.js"></script>
    <!-- main js -->
    <script src="{{ url('assets') }}/js/main.js"></script>


</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>

<script src="{{ url('') }}/js/custom.js"></script>
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    });
    $(document).ready(() => {
        @if (session()->has('success_message'))
        Toast.fire({
            icon: "success",
            title: "{{ session()->get('success_message') }}"
        });
        @endif
        @if (session()->has('success'))
        Toast.fire({
            icon: "success",
            title: "{{ session()->get('success') }}"
        });
        @endif
    })
</script>

</html>
