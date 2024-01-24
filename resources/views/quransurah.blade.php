<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AlquranDigital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri+Quran&family=Aref+Ruqaa&display=swap" rel="stylesheet">
    <style>
        td,
        th {
            border-bottom: none;
            font-family: 'Amiri Quran', serif;
        }

        .ayat {
            float: right;
            font-size: 25px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="table-responsive">
            <table class="table" style="border: none;">
                <tbody>
                    {{-- blade templating => foreach loop --}}
                    @foreach ($response->ayat as $ayat)
                        <th>
                            <td class="ayat text-right">{{ $ayat->ar }}</td>
                        </th>
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td class="arti text-left">{{ $ayat->idn }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
