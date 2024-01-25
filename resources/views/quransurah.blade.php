<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AlquranDigital</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amiri+Quran&family=Aref+Ruqaa&display=swap" rel="stylesheet">
    <style>
        td,
        th {
            font-family: 'Amiri Quran', serif;
        }
    </style>
</head>

<body>
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
