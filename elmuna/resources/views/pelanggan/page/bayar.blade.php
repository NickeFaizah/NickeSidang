@extends('pelanggan.layout.index')

@section('content')
<div class="breadcrumb-section" style="background-image: url({{ url('/') }}/assets/img/semua.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <h1>Selesaikan transaksi</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row mt-3">
    <div class="card">
        <div class="card-header">Selesaikan transaksi</div>
        <div class="card-body">
            <h3>Produk Dibeli</h3>
            <table class="table table-responsive table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Product</th>
                        <th>Harga Satuan</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody class="align-middle text-center">
                    @foreach ($product as $x => $item)
                    <tr>
                        <td>{{ ++$x }}</td>
                        <td>{{ $item->nama_product }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>{{ $item->qty * $item->price }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <h3 class="mt-3">Detail Pembelian</h3>
            <table class="table table-hover">
                <tr>
                    <td>Pembeli</td>
                    <td>: {{ $transaksi->nama_customer }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: {{ $transaksi->alamat }}</td>
                </tr>
                <tr>
                    <td>No Telp</td>
                    <td>: {{ $transaksi->no_tlp }}</td>
                </tr>
                <tr>
                    <td>Ekspedisi</td>
                    <td>: {{ $transaksi->ekspedisi }}</td>
                </tr>
                <tr>
                    <td>Total yang harus dibayar</td>
                    <td>: {{ $transaksi->total_harga }}</td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>: {{ $transaksi->status }}</td>
                </tr>
            </table>
            @if ($transaksi->status == 'Unpaid')
            <button class="btn btn-success col-12 mt-4" data-bs-toggle="modal" data-bs-target="#bayarModal">Bayar <i class="fas fa-money-bill"></i></button>
            @elseif ($transaksi->status == 'Paid')
            <div class="alert alert-info">Tunggu konfirmasi Admin</div>
            @elseif ($transaksi->status == 'Proses')
            <div class="alert alert-info">Pesanan sedang diproses oleh Admin</div>
            @elseif ($transaksi->status == 'Rejected')
            <div class="alert alert-info">Pesanan ditolak oleh Admin</div>
            @elseif ($transaksi->status == 'InTransit')
            <div class="alert alert-info">Pesanan sedang dalam perjalanan. Berikut nomor resinya:
                {{ $transaksi->resi }}</div>
            <form action="{{ url('transaksi/selesai/' . $transaksi->code_transaksi) }}" id="form-selesai" enctype="multipart/form-data" method="POST">
                @csrf
                <button type="button" onclick="konfirmasiForm()" class="btn btn-success col-12 mt-2">Selesaikan Pesanan</button>
            </form>
            @endif
        </div>
    </div>
</div>

<div class="modal fade" id="bayarModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">{{ $title }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('keranjang.bayar.proses') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="code_transaksi" value="{{ $transaksi->code_transaksi }}">
                        <label for="no.rekening">no. rek: 015501128431508 BRI a/n TRIMISRATI</label>
                        <label for="upload-bukti">Upload Bukti Pembayaran:</label>
                        <input type="file" name="bukti_bayar" id="upload-bukti" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Bayar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function konfirmasiForm() {
        var result = confirm("Klik oke jika pesanan sudah sampai?");
        if (result) {
            document.getElementById("form-selesai").submit();
        }
    }

</script>
@endsection
