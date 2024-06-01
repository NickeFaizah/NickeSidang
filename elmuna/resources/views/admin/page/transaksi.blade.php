@extends('admin.layout.index')

@section('content')
<div class="card rounded-full p-2">
    <input type="text" wire:model="search" class="form-control w-25" placeholder="Search....">
    <div class="card-body">
        <table class="table table-responsive table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Date</th>
                    <th>Id Transaksi</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nilai Trx</th>
                    <th>Status</th>
                    <th>Button</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $x => $item)
                <tr class="align-middle">
                    <td>{{ ++$x }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->code_transaksi }}</td>
                    <td>{{ $item->nama_customer }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->total_harga }}</td>
                    <td>
                        {{-- <span class="align-middle {{ $item->status === 'Paid' ? 'badge bg-success text-white' : 'badge bg-danger text-white' }}">
                        {{ $item->status }}
                        </span> --}}
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
                        <button class="btn btn-sm btn-info" onclick="detailTransaksi({{ $item->code_transaksi }})">Detail</button>
                        @if ($item->status === 'Paid')
                        <button class="btn btn-sm btn-primary" onclick="prosesTransaksi({{ $item->code_transaksi }})">Proses</button>
                        <button class="btn btn-sm btn-secondary" onclick="tolakTransaksi({{ $item->code_transaksi }})">Tolak</button>
                        @elseif ($item->status === 'Proses')
                        <button class="btn btn-sm btn-primary" onclick="kirimTransaksi({{ $item->code_transaksi }})">Kirim</button>

                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination d-flex flex-row justify-content-between">
            <div class="showData">
                Data ditampilkan {{ $data->count() }} dari {{ $data->total() }}
            </div>
            <div>
                {{ $data->links() }}
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="detailModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Detail</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
                    <tbody class="align-middle text-center" id="tbody-produk">
                    </tbody>
                </table>
                <h3 class="mt-3">Detail Pembelian</h3>
                <table class="table table-hover">
                    <tr>
                        <td>Pembeli</td>
                        <td>: <span id="transaksi-nama_customer"></span></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: <span id="transaksi-alamat"></span></td>
                    </tr>
                    <tr>
                        <td>No Telp</td>
                        <td>: <span id="transaksi-no_tlp"></span></td>
                    </tr>
                    <tr>
                        <td>Ekspedisi</td>
                        <td>: <span id="transaksi-ekspedisi"></span></td>
                    </tr>
                    <tr>
                        <td>Total yang harus dibayar</td>
                        <td>: <span id="transaksi-total_harga"></span></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>: <span id="transaksi-status"></span></td>
                    </tr>
                    <tr>
                        <td>Bukti Bayar</td>
                        <td>: <img src="" alt="" style="max-width: 100%;" id="transaksi-bukti_bayar">
                        </td>
                    </tr>
                </table>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="prosesModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h1 class="modal-title fs-5 badge-primary" id="staticBackdropLabel">Proses</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/admin/transaksi/proses') }}" method="post">
                @csrf
                <div class="modal-body">
                    Bukti Transaksi:
                    <img src="" class="foto-bukti-pembayaran" style="max-width: 100%" alt="">
                    <p>Klik proses untuk memproses. Waktu 'proses' bisa digunakan untuk menyiapkan produk sebelum
                        dikirim.</p>
                    <input type="hidden" name="code_transaksi" id="proses-code_transaksi">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Proses</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="tolakModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tolak</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/admin/transaksi/tolak') }}" method="post">
                @csrf
                <div class="modal-body">
                    Bukti Transaksi:
                    <img src="" class="foto-bukti-pembayaran" style="max-width: 100%" alt="">
                    <p>Klik tolak untuk me reject transaksi ini.</p>
                    <input type="hidden" name="code_transaksi" id="tolak-code_transaksi">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Tolak</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="kirimModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-md">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Kirim</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ url('/admin/transaksi/kirim') }}" method="post">
                @csrf
                <div class="modal-body">
                    <input type="text" name="resi" id="" class="form-control" required placeholder="Nomor Resi">
                    <input type="hidden" name="code_transaksi" id="kirim-code_transaksi">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
