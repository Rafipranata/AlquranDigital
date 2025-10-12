<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AlquranDigital</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Amiri+Quran&family=Aref+Ruqaa&display=swap" rel="stylesheet">
    <style>
        :root {
            --Color-default-6: #020739;
            --Color-default-5: #fd6d24;
            --Color-default-4: #E9F6FF;
            --Color-default-3: #8a2be2;
            --Color-default-2: #6501c3;
            --Color-default-1: #ffffff;
            --Font-default-3: sans-serif;
            --Font-default-2: 'Noto Naskh Arabic';
        }

        /* Background Gradient */
        body {
            background: linear-gradient(to bottom right, #000000, #003366, #f0f0f0); /* Softer white gradient */
            color: white;
        }

        .navbar {
            background-color: transparent;
        }

        .navbar .container .table {
            margin-top: 25px;
        }

        .navbar .navbar-brand,
        .arti-ayat {
            color: #a8c0ff;
        }

        .btn-mode,
        .btn-arrow {
            background-color:  #003366;
        }

        .navbar-brand-fo {
            color: var(--Color-default-6);
        }

        /* Adjust card and text styles */
        .table .box-ind,
        .table .box-ind .table {
            border-bottom: 1px solid;
            font-family: var(--Font-default-3);
        }

        .table .box .ayat {
            text-align: right;
            font-family: var(--Font-default-2);
        }

        .table .box .description {
            font-size: 17px;
            text-align: right;
        }

        .box-ind .btn {
            
        }

        /* Search Bar */
        .search-bar {
            margin-bottom: 30px;
        }

        .search-bar input {
            width: 60%;
            max-width: 500px;
            margin-right: 10px;
        }

        .search-bar button {
            background-color: var(--Color-default-5);
            border: none;
            color: white;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        .search-bar button:hover {
            background-color: #00509e;
        }

        /* Card styles */
        .card {
            background-color: transparent;
            border: none;
            border-radius: 15px;
            cursor: pointer;
        }

        .card-body {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar  navbar-expand-lg  p-2" id="navbar">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="text-light fw-bold fs-2 text-decoration-none" href="https://www.instagram.com/rafi.nataa">
                Duta
                <span class="text-light">Quran</span>
            </a>
            <a href="/" class="btn-arrow ms-auto  fs-4 px-1 rounded">
                <i class="bi bi-arrow-left mx-1 text-white"></i>
            </a>
            
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container py-3" style="background: transparent;">
    <!-- Surah Details -->
    <table class="table table-borderless text-center" 
           style="background: transparent; border-bottom: 1px solid rgba(255, 255, 255, 0.2);">
        <tbody>
            <tr>
                <th style="background: transparent;">
                    <p class="fs-2 text-white">{{ $response->nama_latin }}</p>
                    <p class="arti-ayat fs-4">{{ $response->arti }}</p>
                    <p class="text-light">{{ $response->jumlah_ayat }} Ayat</p>
                    <p>
                        {{-- <audio controls autoplay>
                            <source src="{{ $response->audio }}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio> --}}
                    </p>
                </th>
            </tr>
        </tbody>
    </table>
</div>

<!-- Surah Ayat and Navigation -->
<section style="background: transparent;">
    @if ($response->nomor != 1 && $response->nomor != 9)
        <div class="text-center fw-bold fs-2 mt-3 text-white" style="font-family: Noto Naskh Arabic">
            <p>بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</p>
        </div>
    @endif
    <div class="container my-4" style="background: transparent;">
        <div class="table-responsive">
            <table class="table table-borderless" style="background: transparent;">
                <tbody>
                    @foreach ($response->ayat as $ayat)
                        <tr style="background: transparent;">
                            <td class="box" style="background: transparent;">
                                <div class="ayat fs-1 fw-bolder mt-4 mb-2 text-break lh-lg text-white">{{ $ayat->ar }}</div>
                                <div class="description text-light mb-2">{!! $ayat->tr !!}</div>
                            </td>
                        </tr>
                        <tr style="background: transparent;">
                            <td class="box-ind" style="background: transparent;">
                                <div class="arti mt-2 mb-3 fs-6 lh-base text-light">
                                    {{ $loop->iteration }}. {{ $ayat->idn }}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="container">
        @if ($response->surat_sebelumnya)
            <a href="/quran/surah/{{ $response->surat_sebelumnya->nomor }}"
        class="btn rounded text-white float-left mb-5"
        style="background: linear-gradient(90deg, #003366, #00509e); border: none;">
            <i class="bi bi-arrow-left mx-1 text-white"></i>
            SEBELUMNYA
        </a>

        @endif
        @if ($response->surat_selanjutnya)
            <a href="/quran/surah/{{ $response->surat_selanjutnya->nomor }}"
               class="btn rounded text-white float-end mb-5"
               style="background: linear-gradient(90deg, #003366, #00509e); border: none;">
                SELANJUTNYA
                <i class="bi bi-arrow-right mx-1"></i>
            </a>
        @endif
    </div>
</section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
