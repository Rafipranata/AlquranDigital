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
        td {
            font-family: 'Amiri Quran', serif;
        }

        :root {
            --Colo-default-6: #280274;
            --Colo-default-5: #FE7A36;
            --Colo-default-4: #E9F6FF;
            --Color-default-3: #8a2be2;
            --Color-default-2: #6501c3;
            --Color-default-1: #ffffff;
            --Font-default-3: sans-serif;
        }

        .navbar {
            transition: transform 0.3s ease-in-out;
            background-color: var(--Colo-default-4);
        }

        .navbar .container .table {
            margin-top: 25px;
        }

        .navbar .navbar-brand {
            color: var(--Colo-default-5);
        }

        .navbar-brand-fo {
            color: var(--Colo-default-6);
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg shadow-sm ">
        <div class="container">
            <a class="navbar-brand fw-bold fs-2" href="https://www.instagram.com/rafi.nataa/">
                Duta
                <span class="navbar-brand-fo">Quran</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <form class="d-flex" method="GET" action="{{route('quran.search')}}">
                    <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="section">
        <div class="container">
            @foreach ($response as $item)
                <div class="card mt-3 mb-3 shadow-sm ">
                    <div class="card-body">
                        <div class="float-start fw-bold">
                            <!-- Content floated to the right -->
                            <span class="fs-5">
                                {{ $item->nama_latin }}
                            </span>
                            <br>
                            <i>
                                {{ $item->arti }}
                            </i>
                        </div>
                        <div class="float-end fs-3">
                            <!-- Content floated to the left -->
                            <div>
                                <a href="/quran/surah/{{ $item->nomor }}">
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
