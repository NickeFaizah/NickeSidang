$(document).ready(function () {
    //Fungsi untuk menambahkan jumlah item
    $(".plus").click(function (e) {
        e.preventDefault();
        var button = $(this);
        var id = $(this).data("id-cart");
        var card = button.closest(".card-body");
        var harga = card.find("#harga-"+id).val();
        var qty = card.find("#qty-"+id).val();

        var tambah = parseInt(qty) + 1;
        card.find("#qty-"+id).val(tambah);

        var subtotal = parseInt(harga) * parseInt(tambah);
        card.find("#total-"+id).val(subtotal);

        if (tambah <= 1) {
            card.find("#minus-"+id).prop("disabled", true);
        } else {
            card.find("#minus-"+id).prop("disabled", false);
        }
    });

    // FUngsi untuk mengurangi jumlah item
    $(".minus").click(function (e) {
        e.preventDefault();
        var button = $(this);
        var id = $(this).data("id-cart");
        var card = button.closest(".card-body");
        var harga = card.find("#harga-"+id).val();
        var qty = card.find("#qty-"+id).val();

        var kurang = parseInt(qty) - 1;
        card.find("#qty-"+id).val(kurang);

        var subtotal = parseInt(harga) * parseInt(kurang);
        card.find("#total-"+id).val(subtotal);

        if (kurang <= 1) {
            card.find("#minus-"+id).prop("disabled", true);
        } else {
            card.find("#minus-"+id).prop("disabled", false);
        }
    });

    $(".card-body").each(function () {
        var card = $(this);
        var harga = card.find("#harga").val();
        var qty = card.find("#qty").val();

        var total = parseInt(harga) * parseInt(qty);
        card.find("#total").val(total);
    });

    $("#btn-checkout").click(function (e) {
        e.preventDefault();
        if ($(".idBarang:checked").length <= 0) {
            alert("Pilih barang yang mau dibeli.")
            return
        }
        $('#coModal').modal('show')
        var cart = []
        $(".idBarang").each(function() {
            if ($(this).is(":checked")) {
                var id = $(this).data("id-cart");
                var qty = $('#qty-'+id).val();
    
                cart.push({id, qty})
            }
        });
        $('#barang-dibeli').val(JSON.stringify(cart))
    });
});

$(document).ready(function () {
    $(".eksp").change(function (e) {
        e.preventDefault();
        var eksp = $(".eksp").val();

        if (eksp === "jnt") {
            var ongkir = $(".ongkir").val(9000);
        } else if (eksp === "jne") {
            var ongkir = $(".ongkir").val(10000);
        } else if (eksp === "sicepat") {
            var ongkir = $(".ongkir").val(8000);
        } else {
            var ongkir = $(".ongkir").val(9500);
        }

        $(".pembayaran").each(function () {
            var card = $(this);
            var totalBelanja = card.find(".totalBelanja").val();
            var totalPpn = parseInt(totalBelanja) * 0.11;
            var ppn = card.find(".ppn").val(totalPpn);
            var disc = card.find(".discount").val();
            var totalDisc = parseInt(totalBelanja) * parseFloat(disc);
            var ongkir = card.find(".ongkir").val();

            var subtotal = parseInt(totalBelanja) + parseInt(totalPpn);
            var subtotal2 = parseInt(subtotal) + parseInt(ongkir);
            console.log(subtotal2);
            console.log(ongkir);
            card.find("#dibayarkan").val(subtotal2);
            // card.find('.ppn').val(ppn);
        });
    });
});

function detailTransaksi(codeTransaksi) {
    $('#detailModal').modal('show');

    $.ajax({
        url: "/admin/transaksi/detail/"+codeTransaksi,
        type: "GET",
        dataType: "json",
        success: function(response){
            $('#transaksi-nama_customer').text(response.transaksi.nama_customer)
            $('#transaksi-alamat').text(response.transaksi.alamat)
            $('#transaksi-no_tlp').text(response.transaksi.no_tlp)
            $('#transaksi-ekspedisi').text(response.transaksi.ekspedisi)
            $('#transaksi-total_harga').text(response.transaksi.total_harga)
            $('#transaksi-status').text(response.transaksi.status)
            $('#transaksi-bukti_bayar').attr('src', '/bukti_bayar/'+response.transaksi.bukti_bayar)
            html = ''
            nomor = 0
            response.products.forEach((i) => {
                nomor++
                html += `
                    <tr>
                        <th>${nomor}</th>
                        <th>${i.nama_product}</th>
                        <th>${i.price}</th>
                        <th>${i.qty}</th>
                        <th>${i.qty * i.price}</th> 
                    </tr>
                `
            })
            $('#tbody-produk').html(html)
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
        }
    });
}

function prosesTransaksi(codeTransaksi) {
    $('#prosesModal').modal('show');

    $.ajax({
        url: "/admin/transaksi/detail/"+codeTransaksi,
        type: "GET",
        dataType: "json",
        success: function(response){
            $('.foto-bukti-pembayaran').attr('src', '/bukti_bayar/'+response.transaksi.bukti_bayar)
            $('#proses-code_transaksi').val(codeTransaksi)
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
        }
    });
}

function tolakTransaksi(codeTransaksi) {
    $('#tolakModal').modal('show');

    $.ajax({
        url: "/admin/transaksi/detail/"+codeTransaksi,
        type: "GET",
        dataType: "json",
        success: function(response){
            $('.foto-bukti-pembayaran').attr('src', '/bukti_bayar/'+response.transaksi.bukti_bayar)
            $('#tolak-code_transaksi').val(codeTransaksi)
        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);
        }
    });
}

function kirimTransaksi(codeTransaksi) {
    $('#kirimModal').modal('show');
    $('#kirim-code_transaksi').val(codeTransaksi)
}
