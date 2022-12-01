<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Keuangan</title>
    <style type="text/css">
        .table1{
            font-family: sans-serif;
            color: black;
            border-collapse: collapse;
        }
        .table1, th, td{
            border: 1px solid;
            padding: 8px 20px;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <center>Laporan Keuangan Masjid Raya Sumatera Barat</center>
    <table class="table1" >
    <tr style="background-color:grey;" class="text-white">
        <td>No</td>
        <td>Tanggal</td>
        <td>Keterangan</td>
        <td>Masuk</td>
        <td>Keluar</td>
    </tr>
    @foreach($keuangans as $keuangan)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$keuangan->tanggal}}</td>
        <td>{{$keuangan->keterangan}}</td>
        <td>@currency($keuangan->masuk)</td>
        <td>@currency($keuangan->keluar)</td>
    </tr>
    @endforeach
    <tr>
        <td colspan="4" style="background-color: grey;color: white;"><center>Total Uang Masuk</center></td>
        <td>@currency($keuangan->sum('masuk'))</td>
    </tr>
    <tr>
        <td colspan="4" style="background-color: grey;color: white;"><center>Total Uang Keluar</center></td>
        <td>@currency($keuangan->sum('keluar'))</td>
    </tr>
    <tr>
        <td colspan="4"  style="background-color: grey;color: white;"><center>Sisa Kas</center></td>
        <td>@currency(($keuangan->sum('masuk'))-($keuangan->sum('keluar')))</td>
    </tr>
</table>
</body>
</html>