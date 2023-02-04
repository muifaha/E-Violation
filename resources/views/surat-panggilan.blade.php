<!DOCTYPE html>
<html lang="en">

<head>
    @include('component.head')
    <title>Surat Panggilan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Ahom&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Noto Serif Ahom', serif;
        }

        .head {
            width: auto;
            display: flex;
            align-content: center;
            justify-content: center;
        }

        .head.row {
            align-content: center;
            justify-content: center;
        }

        .head h2,
        .head h5,
        .head h6 {
            margin: 0 auto;
            display: flex;
            justify-content: center;
        }

        h2,
        h5 {
            word-spacing: 1px;
            letter-spacing: 1px;
        }

        a {
            text-decoration: none;
        }

        hr {
            border-top: 1px solid black;
            opacity: 0.75;
        }

        .row p {
            width: auto;
            font-size: 16px;
        }

        .yth {
            justify-content: space-between;
            padding: 0 12px;
            line-height: 50%;
            letter-spacing: .5px
        }

        .hormat {
            padding: 0 12px;
            letter-spacing: .4px;
            word-spacing: 2px;
        }

        .isi .row {
            line-height: 80%;
        }

        .isi .row p:nth-child(1) {
            width: 150px;
            letter-spacing: .5px
        }
    </style>
</head>

<body>

    <div class="container my-2">
        <div class="row mb-4">
            {{-- <div class="head col-2">
                <img src="/img/smkn1.png" alt="smkn-1-sby" width="90" height="110">
            </div> --}}
            <div class="head row text-center">
                <h2 class="mb-1"><b>SMK NEGERI 1 SURABAYA</b></h2>
                <h6 class="mb-1">Jl. Smea No.4, Wonokromo, Kec. Wonokromo, Kota SBY, Jawa Timur 60243, Telp.
                    031-8292038</h6>
                <h6 class="mb-1">
                    <a href="mailto:info@smkn1-sby.sch.id">e-mail : <i>info@smkn1-sby.sch.id</i></a>
                    <a class="mx-1">||</a>
                    <a href="http://www.smkn1-sby.sch.id/"><i>http://www.smkn1-sby.sch.id/</i></a>
                </h6>
                <h5>SURABAYA 60243</h5>
            </div>
        </div>
        <hr class="mb-1">
        <hr class="mt-1">
        <div class="content">
            <div class="row mx-0" style="justify-content: space-between; margin-top: 30px">
                <p>Perihal : <b class="ms-2">Undangan</b></p>
                <p><b>Surabaya, {{ $text }}</b></p>
            </div>
            <div class="yth mt-4">
                <p>Yth. Bapak/Ibu Orang Tua/Wali Murid</b></p>
                <p>{{ $penanganan->siswa->nama }}</p>
                <p>Kelas {{ $penanganan->siswa->kelas->nama_kelas }}</p>
                <p>di Tempat</p>
            </div>
            <div class="hormat mt-5">
                <p class="mb-1">Dengan hormat,</p>
                <p>Sehubungan dengan adanya sesuatu yang perlu disampaikan kepada Bapak/Ibu, maka Kami mengundang
                    Bapak/Ibu untuk hadir pada :</p>
            </div>
            <div class="isi mx-5 pt-4">
                <div class="row">
                    <p>Hari</p>
                    <p> : <b class="ms-1">{{ $hari }}</b></p>
                </div>
                <div class="row">
                    <p>Tanggal</p>
                    <p> : <b class="ms-1">{{ $text }}</b></p>
                </div>
                <div class="row">
                    <p>Jam</p>
                    <p> : <b class="ms-1">{{ $jam }} - Selesai</b></p>
                </div>
                <div class="row">
                    <p>Tempat</p>
                    <p> : <b class="ms-1">Ruang BK SMK Negeri 1 Surabaya</b></p>
                </div>
            </div>
            <div class="hormat mt-4">
                <p>Mengingat sangat pentingnya hal di atas dimohon Bapak/Ibu untuk bersedia hadir tepat waktu. Atas
                    perhatian dan kehadirannya Kami ucapkan terima kasih.</p>
            </div>
            <div class="hormat mt-5 row mx-0" style="justify-content: flex-end;">
                <p class="row mx-0 px-0">Telah dibuat & disetujui oleh BK.</p>
            </div>
        </div>
    </div>
</body>

</html>
