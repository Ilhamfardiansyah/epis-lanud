<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <link rel="stylesheet" href="{{ asset('assets/css/base.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fancy.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

    <script src={{ asset('assets/js/compatibility.min.js') }}></script>
    <script src={{ asset('assets/js/theViewer.min.js') }}></script>
    <script>
        try {
            theViewer.defaultViewer = new theViewer.Viewer({});
        } catch (e) {}
    </script>
    <title>Cetak</title>
</head>

<body>
    <div id="sidebar">
        <div id="outline">
        </div>
    </div>
    <div id="page-container">
        <div id="pf1" class="pf w0 h0" data-page-no="1">
            <div class="pc pc1 w0 h0">
                <div class="c x1 y1 w2 h2">
                    <div style="margin:0 1rem; display: flex; justify-content: end; align-items:center">
                        <span style="padding: 0.5rem 1rem; border:1px solid #000000">No Pass :
                            {{ $dataPegawai->nopassring ?? '' }}</span>
                    </div>
                </div>


                <div class="t m0 x3 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0">BIODATA PERSONEL </div>

                <table>
                    <tr>
                        <td width="1%">Digital Marketing</td>
                        <td width="10%">: SEO, SEO, Content Writer, Copywriting</td>
                    </tr>
                </table>

                <div class="t m0 x6 h3 y1d ff1 fs0 fc0 sc0 ls0 ws0"></div>
            </div>

            <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
        </div>


        <div id="pf2" class="pf w0 h0" data-page-no="2">
            <div class="pc pc2 w0 h0">

                <div class="t m0 x3 h4 y4 ff2 fs1 fc0 sc0 ls0 ws0">SIYALEMENS </div>

            </div>

            <div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
        </div>




        <div class="c x1 y1 w2 h2">
            <p>&nbsp;</p>
            <p>Sudah Pernah Tersanasdasdasditer :
        </div>
    </div>
    </div>
</body>

</html>
