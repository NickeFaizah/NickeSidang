@extends('pelanggan.layout.index')

@section('content')
<div class="breadcrumb-section" style="background-image: url(assets/img/cabe.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-1 text-left">
                <div class="breadcrumb-text">
                    <h1>Selamat Berbelanja</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h5>Payment List</h5>
        </div>
        <div class="card-body col-lg-auto">
            <table class="table table-responsive table-striped">
                <thead class="text-center">
                    <tr>
                        <th>No</th>
                        <th>Id Transaksi</th>
                        <th>Nama Penerima</th>
                        <th>Total Transaksi</th>
                        <th>Status</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody class="align-middle text-center">
                    @foreach ($data as $x => $item)
                    <tr>
                        <td>{{ ++$x }}</td>
                        <td>{{ $item->code_transaksi }}</td>
                        <td>{{ $item->nama_customer }}</td>
                        <td>{{ $item->total_harga }}</td>
                        <td>
                            @if ($item->status === 'Unpaid')
                            <span class="badge text-bg-danger">Unpaid</span>
                            @elseif ($item->status === 'Proses')
                            <span class="badge text-bg-info">Proses</span>
                            @elseif ($item->status === 'Rejected')
                            <span class="badge text-bg-secondary">Ditolak</span>
                            @elseif ($item->status === 'InTransit')
                            <span class="badge text-bg-warning">Dikirim</span>
                            @elseif ($item->status === 'Selesai')
                            <span class="badge text-bg-success">Selesai</span>
                            @else
                            <span class="badge text-bg-success">Paid</span>
                            @endif
                        </td>
                        <td>
                            @if ($item->status === 'Unpaid')
                            <a href="{{ route('keranjang.bayar', ['code_transaksi' => $item->code_transaksi]) }}" class="btn btn-success">Bayar</a>
                            @else
                            <a href="{{ route('keranjang.bayar', ['code_transaksi' => $item->code_transaksi]) }}" class="btn btn-info">Detail</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
