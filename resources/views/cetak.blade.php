<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Pembelian Beton</title>
    <style>
        /* Styling untuk nota */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .nota {
            border: 1px solid #ccc;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
            min-height: 600px; /* Tinggi minimal untuk nota */
        }
        .melayani {
            border: 2px solid #010101;
            padding: 20px;
            max-width: 250px;
            margin: 0 auto;
            font-size: 12px;
            min-height: 60px; /* Tinggi minimal untuk nota */
            text-align: center;
        }
        .info-pelanggan {
            margin-bottom: 20px;
        }
        .info-pelanggan p {
            margin: 5px 0;
        }
        .detail-pembelian table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .detail-pembelian th, .detail-pembelian td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        .detail-pembelian th {
            background-color: #f2f2f2;
        }
        .total-pembelian {
            text-align: right;
            margin-top: 20px;
        }
        .keterangan-kiri, .keterangan-kanan {
            width: 50%;
            float: left;
        }
        .keterangan-kiri img {
            max-width: 400px;
            margin: 0px;
            /* min-height: 100px; */
        }
        .keterangan-kiri {
            text-align: left;
        }
        .keterangan-kanan {
            text-align: right;
        }
        .ttd {
            clear: both;
            text-align: center;
            margin-top: 50px;
        }
        .ttd img {
            max-width: 150px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="nota">
        <!-- Keterangan Kiri -->
        <div class="keterangan-kiri">
            <img src="{{ asset('cb.png') }}">
            {{-- <p><strong>Alamat:</strong> Jl. Pahlawan No. 123</p>
            <p><strong>No. Telepon:</strong> 081234567890</p> --}}
        </div>

        <!-- Keterangan Kanan -->
        <div class="keterangan-kanan">
            <p>Blitar, 4 Mei 2024</p>
            <p>Kepada Yth. John Doe</p>
            <p><strong>No. Nota:</strong> 001/MEI/2024</p>
            <!-- Tambahkan keterangan lain di sini -->
        </div>

        <!-- Detail Pembelian -->
        <div class="detail-pembelian">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Banyaknya</th>
                        <th>Nama Barang</th>
                        <th>Harga Satuan (Rp)</th>
                        <th>Jumlah (Rp)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Beton K225</td>
                        <td>5</td>
                        <td>500.000</td>
                        <td>2.500.000</td>
                    </tr>
                    <!-- Tambahkan baris data lain sesuai dengan kebutuhan -->
                </tbody>
            </table>
        </div>

        <!-- Total Pembelian -->
        <div class="total-pembelian">
            <p><strong>Total :</strong> Rp 2.500.000</p>
        </div>

        <!-- Tanda Tangan -->
        <div class="ttd">
            <div class="keterangan-kiri">
                <p>Tanda Terima:</p><br>
                <p>_________________</p>
            </div>
            <div class="keterangan-kanan">
                <p>Hormat kami:</p><br>
                <p>_________________</p>
            </div>
        </div>
    </div>
</body>
</html>
