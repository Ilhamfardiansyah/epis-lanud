<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.3.0/paper.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('paper.css') }}">

    <style>
        @page {
            size: A4
        }

        @media print {

            .no-print,
            .no-print * {
                display: none !important;
            }
        }
    </style>
    <title>Print Data Pegawai</title>
</head>


<body class="A4"
    style="font-family: Arial, sans-serif;
font-size: 12pt;
line-height: 1.5;
margin: 0;
padding: 0;
position:relative;">

    <section class="sheet padding-10mm">

        <div style="margin:0 1rem; display: flex; justify-content: end; align-items:center">
            <span style="padding: 0.5rem 1rem; border:1px solid #000000">No Pass :
                {{ $dataPegawai->nopassring ?? '' }}</span>
        </div>
        <br>
        <h3 style="text-align: center">BIODATA PERSONEL</h3>
        <br>
        <table style="margin: 25px">
            <tr>
                <td style="width: 1em">1.</td>
                <td style="width: 15em">Nama</td>
                <td>: {{ $dataPegawai->nama }}</td>
            </tr>
            <tr>
                <td style="width: 1em">2.</td>
                <td>Pangkat</td>
                <td>: {{ $dataPegawai->pangkat }}</td>
            </tr>
            <tr>
                <td style="width: 1em">3.</td>
                <td>NRP</td>
                <td>: {{ $dataPegawai->NRP }}</td>
            </tr>
            <tr>
                <td style="width: 1em">4.</td>
                <td>Jabatan</td>
                <td>: {{ $dataPegawai->jabatan }}</td>
            </tr>
            <tr>
                <td style="width: 1em">5.</td>
                <td>Kesatuan</td>
                <td>: {{ $dataPegawai->kesatuan }}</td>
            </tr>
            <tr>
                <td style="width: 1em">6.</td>
                <td>No Passring</td>
                <td>: {{ $dataPegawai->nopassring }}</td>
            </tr>
            <tr>
                <td style="width: 1em">7.</td>
                <td>Tanda Jasa</td>
                <td>: {{ $dataPegawai->tandajasa }}</td>
            </tr>
            <tr>
                <td style="width: 1em">8.</td>
                <td>TGL / Umur</td>
                <td>: {{ $dataPegawai->tgl }}</td>
            </tr>
            <tr>
                <td style="width: 1em">9.</td>
                <td>Suku Bangsa</td>
                <td>: {{ $dataPegawai->suku }}</td>
            </tr>
            <tr>
                <td style="width: 1em">10.</td>
                <td>Agama</td>
                <td>: {{ $dataPegawai->agama }}</td>
            </tr>
            <tr>
                <td style="width: 1em">11.</td>
                <td>Tinggi / Berat</td>
                <td>: {{ $dataPegawai->tinggi }}</td>
            </tr>
            <tr>
                <td style="width: 1em">12.</td>
                <td>Warna Kulit</td>
                <td>: {{ $dataPegawai->warnakulit }}</td>
            </tr>
            <tr>
                <td style="width: 1em">13.</td>
                <td>Mata</td>
                <td>: {{ $dataPegawai->mata }}</td>
            </tr>
            <tr>
                <td style="width: 1em">14.</td>
                <td>Rambut</td>
                <td>: {{ $dataPegawai->rambut }}</td>
            </tr>
            <tr>
                <td style="width: 1em">15.</td>
                <td>Gol Darah</td>
                <td>: {{ $dataPegawai->goldarah }}</td>
            </tr>
            <tr>
                <td style="width: 1em">16.</td>
                <td>Alamat Sekarang</td>
                <td>: {{ $dataPegawai->alamatsekarang }}</td>
            </tr>
            <tr>
                <td style="width: 1em">17.</td>
                <td>Nama Ayah/Alamat</td>
                <td>: {{ $dataPegawai->ayahalamat }}</td>
            </tr>
            <tr>
                <td style="width: 1em">18.</td>
                <td>Nama Ibu/Alamat</td>
                <td>: {{ $dataPegawai->ibualamat }}</td>
            </tr>
            <tr>
                <td style="width: 1em">19.</td>
                <td>Nama Istri/Alamat</td>
                <td>: {{ $dataPegawai->istrialamat }}</td>
            </tr>
            <tr>
                <td style="width: 1em">20.</td>
                <td>Tempat/No Akte Nikah</td>
                <td>: {{ $dataPegawai->tempatnikah }}</td>
            </tr>
            <tr>
                <td style="width: 1em">21.</td>
                <td>Nama Anak Kandung</td>
                <td>: {{ $dataPegawai->namaanak }}</td>
            </tr>
            <tr>
                <td style="width: 1em">22.</td>
                <td>Nama Ortu Istri/Suami</td>
                <td>: {{ $dataPegawai->ortuistrialamat }}</td>
            </tr>


        </table>

    </section>

    <section class="sheet padding-10mm">
        <br>
        <h3 style="text-align: center">SIYALEMENS</h3>
        <br>
        <table style="margin: 25px">
            <tr>
                <td style="width: 1em">1.</td>
                <td style="width: 15em">Lembaga</td>
                <td>: {{ $dataPegawai->siyalem->lembaga }}</td>
            </tr>
            <tr>
                <td style="width: 1em">2.</td>
                <td style="width: 10em">Sikap</td>
                <td>: {{ $dataPegawai->siyalem->sikap }}</td>
            </tr>
            <tr>
                <td style="width: 1em">3.</td>
                <td style="width: 10em">Langkah</td>
                <td>: {{ $dataPegawai->siyalem->langkah }}</td>
            </tr>
            <tr>
                <td style="width: 1em">4.</td>
                <td style="width: 10em">Bangun Kepala</td>
                <td>: {{ $dataPegawai->siyalem->bangun_kepala }}</td>
            </tr>
            <tr>
                <td style="width: 1em">5.</td>
                <td style="width: 10em">Rambut</td>
                <td>: {{ $dataPegawai->siyalem->rambut }}</td>
            </tr>
            <tr>
                <td style="width: 1em">6.</td>
                <td style="width: 10em">Kening</td>
                <td>: {{ $dataPegawai->siyalem->kening }}</td>
            </tr>
            <tr>
                <td style="width: 1em">7.</td>
                <td style="width: 10em">Dahi</td>
                <td>: {{ $dataPegawai->siyalem->dahi }}</td>
            </tr>
            <tr>
                <td style="width: 1em">8.</td>
                <td style="width: 10em">Hidung</td>
                <td>: {{ $dataPegawai->siyalem->hidung }}</td>
            </tr>
            <tr>
                <td style="width: 1em">10.</td>
                <td style="width: 10em">Telinga</td>
                <td>: {{ $dataPegawai->siyalem->telinga }}</td>
            </tr>
            <tr>
                <td style="width: 1em">11.</td>
                <td style="width: 10em">Sudah Pernah Tersangkut Urusan Polisi Militer</td>
                <td>: {{ $dataPegawai->siyalem->urusan_polisi_militer }}</td>
            </tr>
        </table>
        <button onclick="window.print();" class="btn btn-success no-print"
            style="position: fixed; bottom:35px; right:10em;">Print</button>
        <form action="/home" method="get">
            <button class="btn btn-primary no-print" style="position: fixed; bottom:35px; right:5em;">Back</button>
        </form>
    </section>
</body>

</html>
