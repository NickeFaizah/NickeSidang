<div class="top-area" id="sticker">
    <nav class="navbar navbar-dark navbar-expand-lg" style=background-color: rgba(210, 104, 29, 0.8);>
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ url('assets') }}/img/logo muna.png" alt="" width="100" height="60"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end gap-4" id="navbarSupportedContent">
                <ul class="navbar-nav gap-4">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path() == '/' ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link {{Request::path() == 'about' ? 'active' : '';}} " href="/about">About</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link {{ Request::path() == 'product' ? 'active' : '' }}" href="/product">Product</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link {{ Request::path() == 'contact' ? 'active' : '' }}" href="/contact">Contact Us</a>
                    </li> --}}
                    @if (Auth::user() != null)
                    <li class="nav-item">
                        <div class="notif">
                            <a href="/transaksi" class="fs-5 nav-link {{ Request::path() == 'transaksi' ? 'active' : '' }}">
                                <i class="fa-solid fa-bag-shopping"></i>
                                {{-- @if ($count)
                                <span class="badge badge-pill badge-danger">{{ $count }}</span>
                                @endif --}}
                            </a>
                            @if ($count)
                            <div class="circle">{{ $count }}</div>
                            @endif
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="notif">
                            <a href="/checkOut" class="fs-5 nav-link {{ Request::path() == 'checkOut' ? 'active' : '' }}">
                                <i class="fa fa-cash-register"></i>
                            </a>
                        </div>
                    </li>
                    @endif
                    @auth
                    <div class="select" tabindex="0" role="button">
                        <div class="text-links">
                            <div class="d-flex gap-3 align-items-center">
                                <img src="{{ asset('storage/user/' . Auth::user()->foto) }}" class="rounded-circle" style="width: 50px;" alt="">
                                <div class="d-flex flex-column text-white">
                                    <p class="m-0" style="font-weight: 700; font-size:14px;">{{ Auth::user()->name }}
                                    </p>
                                    <p class="m-0" style="font-size:12px">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="links-login text-white" id="links-login">
                            <a href="logout_pelanggan" style="text-decoration: none" role="button" tabindex="0">Keluar</a>
                        </div>
                    </div>
                    @else
                    <li class="nav-item -ml-3 mt-2">
                        <button type="button" class="btn btn-success" style="background-color:rgb(88, 74, 55)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Login | Register</button>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</div>



<script>
    $(".text-links").click(function(e) {
        e.preventDefault();
        var $linksLogin = $("#links-login");
        if ($linksLogin.hasClass("activeLogin")) {
            $linksLogin.removeClass("activeLogin");
        } else {
            $linksLogin.addClass("activeLogin");
        }
    });

</script>
