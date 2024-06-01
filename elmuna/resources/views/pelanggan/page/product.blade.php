@extends('pelanggan.layout.index')

@section('content')
<!-- breadcrumb-section -->
<div class="breadcrumb-section" style="background-image: url(assets/img/ban.png);">
    <div class="content">
        <div class="row">
            <div class="col-lg-5 offset-lg-1 text-left">
                {{-- <div class="breadcrumb-text">
                    <h1>Nikmati Harimu Dengan Rasa Yang Unik</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni, eius!</p>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- product tab section -->
<div class="d-flex flex-row gap-2 mt-4">
    @foreach ($data->chunk(5) as $chunk)
</div>
<div class="d-flex flex-wrap mb-4 gap-3">
    @foreach ($chunk as $p)
    <!-- card untuk setiap produk -->
    <div class="card" style="width:210px;">
        <div class="card-header m-auto">
            <img src="{{ asset('storage/product/' . $p->foto) }}" alt="keripik" style="width: 100%;height:200px; object-fit: cover; padding:0;">
        </div>
        <!-- body card -->
        <div class="card-body">
            <!-- nama produk -->
            <p class="m-0 text-center"> {{ $p->nama_product }} </p>
            {{-- <button type="button" class="btn btn-outline-primary btn-detail" data-bs-toggle="modal" data-bs-target="#productModal{{ $p->id }}">
            Detail
            </button> --}}
        </div>
        <!-- footer card -->
        <div class="card-footer d-flex flex-row justify-content-between align-items-center">
            <!-- Harga produk -->
            <p class="m-0" style="font-size: 16px; font-weight:600;"><span>Rp.
                </span>{{ number_format($p->harga) }}</p>
            @if (Auth::user() != null)
            <form action="{{ route('addTocart') }}" method="POST">
                @csrf
                <input type="hidden" name="idProduct" value="{{ $p->id }}">
                <button type="submit" class="btn btn-outline-primary" style="font-size:24px">
                    <i class="fa-solid fa-cart-plus"></i>
                </button>
            </form>
            @endif
        </div>
    </div>
    @endforeach
</div>
@endforeach
</div>

{{-- Pagination --}}

<div class="pagination d-flex flex-row justify-content-between">
    <div class="showData">
        Data ditampilkan {{ $data->count() }} dari {{ $data->total() }}
    </div>
    <div>
        {{ $data->links() }}
    </div>
</div>
{{-- @endif --}}

<script>
    $(document).ready(function() {
        $('kategory').change(function(e) {
            e.preventDefault();
            let vKat = $(this).val();
            alert(vKat);
        });
    });

    // Check if user is logged in
    const isLoggedIn = /* kode untuk memeriksa apakah pengguna sudah login */ ;

    // Ambil elemen tombol login/register
    const loginRegisterButton = document.getElementById('loginRegisterButton');

    // Jika pengguna sudah login, sembunyikan tombol
    if (isLoggedIn) {
        loginRegisterButton.style.display = 'none';
    }

</script>
{{-- <!-- Modal untuk detail produk -->
<div class="modal fade" id="productModal{{ $p->id }}" tabindex="-1" aria-labelledby="productModalLabel{{ $p->id }}" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="productModalLabel{{ $p->id }}">{{ $p->nama_product }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- Deskripsi produk -->
            <p>{{ $p->deskripsi }}</p>
        </div>
        <div class="modal-footer">
            <!-- Tombol tutup modal -->
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        </div>
    </div>
</div>
</div> --}}
@endsection
