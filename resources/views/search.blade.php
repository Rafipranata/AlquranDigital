<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AlquranDigital</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Amiri+Quran&family=Aref+Ruqaa&display=swap" rel="stylesheet">
    <style>
        :root {
        --Color-default-7: #FFA447;
        --Color-default-6: #020739;
        --Color-default-5: #FE7A36;
        --Color-default-4: #E9F6FF;
        --Color-default-3: #8a2be2;
        --Color-default-2: #6501c3;
        --Color-default-1: #ffffff;
        --Font-default-3: sans-serif;
    }

    .navbar {
        transition: transform 0.3s ease-in-out;
        background-color: var(--Color-default-4);
    }

    .navbar .container .table {
        margin-top: 25px;
    }

    .navbar .navbar-brand {
        color: var(--Color-default-5);
    }

    .btn-mode,
    .btn-arrow {
        background-color: var(--Color-default-7);
    }

    .navbar-brand-fo {
        color: var(--Color-default-6);
    }

    .table .box-ind,
    .table .box-ind .table {
        border-bottom: 1px solid;
        font-family: var(--Font-default-3);
    }

    .table .box .ayat {
        text-align: right;
        font-family: 'Noto Naskh Arabic';
    }

    .table .box .description {
        font-size: 17px;
        text-align: right;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg shadow-sm ">
        <div class="container">
            <a class="navbar-brand fw-bold fs-2" href="https://www.instagram.com/duta.code/?igsh=NzZnOTIwa3Y2ZDYz">
                Duta
                <span class="navbar-brand-fo">Quran</span>
            </a>
            <a href="/" class="btn-arrow ms-auto fs-5 rounded">
                <i class="bi bi-arrow-left px-2 text-white"></i>
            </a>
        </div>
    </nav>
    <div class="container">
    @if (count($searchResults) > 0)
        @foreach ($searchResults as $result)
            <div class="card mt-3 mb-3 shadow-sm ">
                <div class="card-body">
                    <div class="float-start fw-bold">
                        <!-- Content floated to the right -->
                        <span class="fs-5">
                            {{ $result->nama_latin }}
                        </span>
                        <br>
                        <i>
                            {{ $result->arti }}
                        </i>
                    </div>
                    <div class="float-end fs-3">
                        <!-- Content floated to the left -->
                        <div>
                            <a href="/quran/surah/{{ $result->nomor }}">
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @else
        <div style="display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
        margin: 0;" class="fw-bold fs-3">
            <p>No results found.</p>
        </div>        
    @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
