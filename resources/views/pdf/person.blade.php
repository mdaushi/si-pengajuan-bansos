<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $heading }}</title>
    <style>
        table {
            background: white;
            color: black;
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            font-family: sans-serif;
        }

        td,
        th {
            border-color: #ededed;
            border-style: solid;
            border-width: 1px;
            font-size: 13px;
            line-height: 2;
            overflow: hidden;
            padding-left: 6px;
            word-break: normal;
        }

        th {
            font-weight: normal;
            text-align: left;
        }

        table {
            page-break-after: auto
        }

        tr {
            page-break-inside: avoid;
            page-break-after: auto
        }

        td {
            page-break-inside: avoid;
            page-break-after: auto
        }
        .w-1 {
            width: 300px;
        }
        .w-2 {
            width:fit-content;
        }
    </style>
</head>

<body>
    <h2 style="text-align: center;">{{ $heading }}</h2>
    <table>
        <tr>
            <th class="w-1">Nama</th>
            <th class="w-2">{{ $datas[0]->nama }}</th>
        </tr>
        <tr>
            <th>NIK</th>
            <th>{{ $datas[0]->nik }}</th>
        </tr>
        <tr>
            <th>NO KK</th>
            <th>{{ $datas[0]->no_kk }}</th>
        </tr>
        <tr>
            <th>Domisili</th>
            <th>{{ $datas[0]->domisili }}</th>
        </tr>
        <tr>
            <th>Pekerjaan</th>
            <th>{{ $datas[0]->pekerjaan }}</th>
        </tr>
        <tr>
            <th>Penghasilan</th>
            <th>{{ $datas[0]->penghasilan }}</th>
        </tr>
        <tr>
            <th>Nama Kepala Keluarga</th>
            <th>{{ $datas[0]->nm_kepala_keluarga }}</th>
        </tr>
        <tr>
            <th>Pekerjaan Kepala Keluarga</th>
            <th>{{ $datas[0]->pekerjaan_kepala_keluarga }}</th>
        </tr>
        <tr>
            <th>Tanggungan</th>
            <th>{{ $datas[0]->jumlah_tanggungan }}</th>
        </tr>
        <tr>
            <th>Jumlah Anggota Keluarga</th>
            <th>{{ $datas[0]->jumlah_anggota_keluarga }}</th>
        </tr>
    </table>
    {{-- <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIK</th>
            <th>No.KK</th>
            <th>Domisili</th>
            <th>Pekerjaan</th>
            <th>Penghasilan</th>
            <th>Kepala Keluarga</th>
            <th>Pekejerjaan Kepala Keluarga</th>
            <th>Tanggungan</th>
            <th>Anggota Keluarga</th>
        </tr>
        @foreach ($datas as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td class="sort-nama">{{ $data->nama }}</td>
                <td class="sort-nik">{{ $data->nik }}</td>
                <td class="sort-no_kk">{{ $data->no_kk }}</td>
                <td class="sort-domisili">{{ $data->domisili }}</td>
                <td class="sort-pekerjaan">{{ $data->pekerjaan }}</td>
                <td class="sort-penghasilan">{{ $data->penghasilan }}</td>
                <td class="sort-nm_kepala_keluarga">{{ $data->nm_kepala_keluarga }}</td>
                <td class="sort-pekerjaan_kepala_keluarga">{{ $data->pekerjaan_kepala_keluarga }}
                </td>
                <td class="sort-jumlah_tanggungan">{{ $data->jumlah_tanggungan }}</td>
                <td class="sort-jumlah_anggota_keluarga">{{ $data->jumlah_anggota_keluarga }}</td>
            </tr>
        @endforeach
    </table> --}}
</body>

</html>
