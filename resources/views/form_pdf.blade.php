<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat Pernyataan Orangtua/Wali</title>
</head>
<body>
    <table width="70%" align="center" style="margin-top: 5%">
        <tr align="center">
            <td style="font-weight: bold">SURAT PERNYATAAN IZIN ORANGTUA/WALI SISWA <br> MENGIKUTI PEMBELAJARAN TATAP MUKA DISEKOLAH <br>{{ $data->jenjang }} PANCA BUDI MEDAN</td>
        </tr>
    </table>

    <table width="90%" align="center" style="margin-top: 5%">
        <tr>
            <td>Saya yang bertanda tangan dibawah ini,</td>
        </tr>
    </table>

    <table width="70%" align="center" style="margin-top: 1%">
        <tr>
            <td width="40%">Nama orangtua/wali</td><td width="1%"> : </td><td>{{ $data->nama_ortu }}</td>
        </tr>
        <tr>
            <td width="40%">Alamat</td><td width="1%"> : </td><td>{{ $data->alamat_ortu }}</td>
        </tr>
        <tr>
            <td width="40%">No. Handphone</td><td width="1%"> : </td><td>{{ $data->hp_ortu }}</td>
        </tr>
    </table>

    <table width="90%" align="center">
        <tr>
            <td>Adalah orangtua/wali dari,</td>
        </tr>
    </table>

    <table width="70%" align="center">
        <tr>
            <td width="40%">Nama Siswa</td><td width="1%"> : </td><td>{{ $data->nama_siswa }}</td>
        </tr>
        <tr>
            <td width="40%">Unit</td><td width="1%"> : </td><td>{{ $data->jenjang }}</td>
        </tr>
        <tr>
            <td width="40%">Kelas</td><td width="1%"> : </td><td>{{ $data->kelas }}</td>
        </tr>
        <tr>
            <td width="40%">NIS/NISN</td><td width="1%"> : </td><td>{{ $data->nisn }}</td>
        </tr>
        <tr>
            <td width="40%">Alamat</td><td width="1%"> : </td><td>{{ $data->alamat_siswa }}</td>
        </tr>
        <tr>
            <td width="40%">No. Handphone</td><td width="1%"> : </td><td>{{ $data->hp_siswa }}</td>
        </tr>
    </table>

    <table width="90%" align="center" style="margin-top: 3%">
        <tr>
            <td>
                Dengan ini <span style="font-weight: bold">
                    @if ($data->status == 'Approved')
                    MEMBERIKAN IZIN/<strike>TIDAK MEMBERI IZIN</strike>
                    @else
                    <strike>MEMBERIKAN IZIN</strike>/TIDAK MEMBERI IZIN
                    @endif
                    *</span>
                    (coret salah satu) pada putra/putri kami untuk mengikuti pembelajaran tatap muka di {{ $data->jenjang }} Panca Budi Medan pada tahun pelajaran <span style="font-weight: bold">2021/2022</span>
                <br>
                Demikian surat ini kami buat dengan kesadaran dan tanggung jawab.
            </td>
        </tr>
    </table>

    <table width="59%" align="left" style="margin-top: 5%;padding-top: 7px" cellpadding=0 cellspacing=0>
        <tr align="right">
            <td><img src="data:image/png;base64, {{ $image }}"></td>
        </tr>
    </table>

    <table width="40%" align="right" style="margin-top: 2%">
        <tr>
            <td>Medan, {{ date('d/m/Y') }}</td>
        </tr>
        <tr>
            <td>Orangtua/Wali Siswa</td>
        </tr>
        <tr style="line-height:75px;">
            <td><span style="font-weight: bold">{{ $data->nama_ortu }}</span></td>
        </tr>
    </table>
</body>
</html>
