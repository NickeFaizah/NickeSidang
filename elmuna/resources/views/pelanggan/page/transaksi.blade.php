@extends('pelanggan.layout.index')

@section('content')
<style>
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

</style>

<div class="breadcrumb-section" style="background-image: url(assets/img/hiya.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <h1>Keranjang Belanja</h1>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <h3 class="mt-5 mb-1">Keranjang Belanja</h3> --}}
<div class="card">
    <div class="card-body col-lg-auto">
        <table class="table table-striped">
            <thead class="text-center">
                <tr>
                    <th><i class="fa-solid fa-list-check"></i></th>
                    <th>Foto</th>
                    <th>Nama Product</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>total</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="align-middle text-center">
                <div class="d-flex flex-wrap gap-4 mb-5">
                    @if ($data->isEmpty())
                    <tr class="text-center">
                        <td colspan="9">Belum ada barang</td>
                    </tr>
                    @else
                    @foreach ($data as $x)
                    <tr class="align-middle">
                        <td>
                            <input type="checkbox" class="idBarang" data-id-cart="{{ $x->id }}" class="checkbox-custom">
                            <input type="hidden" name="" id="idbarang-{{ $x->id }}" value="{{ $x->product->id }}">
                        </td>
                        <td>
                            <img src="{{ asset('storage/product/' . $x->product->foto) }}" width="130" height="130" alt="">
                        </td>
                        @csrf
                        <td>{{ $x->product->nama_product }}</td>
                        <td><input type="number" name="harga[]" class="text-center" id="harga-{{ $x->id }}" value="{{ $x->product->harga }}" readonly>
                        </td>
                        <td>
                            <div data-id="{{ $x->product->id }}">
                                <div class=" align-items-center">
                                    <button class="rounded-start bg-secondary p-2 border border-0 minus" id="minus-{{ $x->id }}" data-id-cart="{{ $x->id }}" disabled>-</button>
                                    <input type="number" name="qty" class="form-controls w-20 text-center qty" id="qty-{{ $x->id }}" name="qty" value="{{ $x->qty }}" readonly>
                                    <button class="rounded-end bg-secondary border p-2 border-0 plus" id="plus" data-id-cart="{{ $x->id }}">+</button>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div>
                                <input type="number" class="form-controls w-20 border-0 total text-center" name="total" value="{{ $x->price }}" readonly id="total-{{ $x->id }}">
                            </div>
                        </td>
                        <td>
                            <div>
                                <form method="POST" action="{{ route('destroy.cart', ['id' => $x->id]) }}" type="button">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger deleteproduct" onclick="return confirm('Apakah anda yakin akan menghapus produk?')">
                                        <i class=" fa fa-trash-alt"></i>
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                </div>
                @endforeach
            </tbody>
            @endif
        </table>
        @if (count($data) > 0)
        <button class="col-12 btn btn-success mt-3" id="btn-checkout">Checkout</button>
        @endif
    </div>
</div>

<div class="modal fade" id="coModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $title }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('checkout.product') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="product" id="barang-dibeli">
                    <h3>Masukan Alamat Penerima</h3>
                    <div class="row mb-3">
                        <label for="nama_penerima" class="col-form-label col-sm-3">Nama Penerima</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nama_penerima" name="namaPenerima" placeholder="Masukan Nama Penerima" autofocus required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="alamat_penerima" class="col-form-label col-sm-3">Alamat Penerima</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="alamat_penerima" name="alamatPenerima" placeholder="Masukan Alamat Penerima" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tlp" class="col-form-label col-sm-3">No.tlp Penerima</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="tlp" name="tlp" placeholder="Masukan No tlp Penerima" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="ekspedisi" class="col-form-label col-sm-3">Ekspedisi</label>
                        <div class="col-sm-9">
                            <select name="ekspedisi" class="form-control eksp" id="ekspedisi">
                                <option value="">-- Pilih Ekspedisi --</option>
                                <option value="jnt">J&T Ekspress</option>
                                <option value="jne">JNE Ekspress</option>
                                <option value="sicepat">Sicepat Ekspress</option>
                                <option value="ninja">Ninja Ekspress</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="ongkir" class="ongkir">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Checkout</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
