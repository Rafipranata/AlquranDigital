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
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #E9F6FF ">
        <div class="container">
            <a class="navbar-brand fw-bold" href="https://www.instagram.com/duta.code/?igsh=NzZnOTIwa3Y2ZDYz" style="color: #FE7A36;">Duta  <span style="color: #280274;">Quran</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
