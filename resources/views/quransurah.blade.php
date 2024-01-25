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
        td,
        th {
            font-family: 'Amiri Quran', serif;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #E9F6FF ">
        <div class="container">
            <a class="navbar-brand fw-bold" href="https://www.instagram.com/duta.code/?igsh=NzZnOTIwa3Y2ZDYz" style="color: #FE7A36;">Duta  <span style="color: #280274;">Quran</span></a>
            <a href="/index" class="fs-2 d-lg-none">
                <i class="bi bi-arrow-left"></i>
            </a>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
                </ul>
                <a href="/" class="fs-3 ">
                    <i class="bi bi-arrow-left"></i>
                </a>
            </div>
        </div>
    </nav>

    <div class="container">
        <table class="table table-borderless">
            <tbody>
                @foreach ($response->ayat as $ayat)
                    <th class="box-ayat">
                    <td class="ayat text-right fs-4 fw-bolder float-end pt-5 pb-5">{{ $ayat->ar }}</td>
                    </th>
                    <tr class="box-arti fs-5">
                        <td>{{ $loop->iteration }}</td>
                        <td class="arti text-left lh-base">{{ $ayat->idn }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
