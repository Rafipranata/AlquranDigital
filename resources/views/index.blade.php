<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duta Quran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom right, #000000, #003366, #f0f0f0); /* Softer white gradient */
            color: white;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.2);
            border: none;
            border-radius: 15px;
            cursor: pointer;
        }
        .card-body {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .section h1 {
            text-align: center;
            margin-bottom: 50px;
        }
        footer {
            color: white;
            text-align: center;
            margin-top: 50px;
        }
        .search-bar {
            margin-bottom: 30px;
        }
        .search-bar form {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .search-bar input {
            width: 60%; /* Adjusted width for the search bar */
            max-width: 500px; /* Set maximum width for larger screens */
            margin-right: 10px; /* Spacing between input and button */
        }
        .search-bar button {
            background-color: #003366; /* Button color */
            border: none;
            color: white;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        .search-bar button:hover {
            background-color: #00509e; /* Hover effect */
        }
    </style>
</head>
<body>

    <div class="section">
        <div class="container">
            <div class="text-center">
                <h1>Duta Quran</h1>
                <p class="lead">Teknologi Menghubungkan Kita dengan Pesan Ilahi</p>
            </div>

            <!-- Search Bar with Submit Button -->
            <div class="search-bar text-center">
                <form method="GET" action="{{ route('quran.search') }}">
                    <input type="text" name="search" class="form-control" placeholder="Cari Surah..." value="{{ request()->get('search') }}">
                    <button type="submit" class="btn">Search</button>
                </form>
            </div>


            <div class="row">
                @foreach ($response as $item)
                    <div class="col-md-4">
                        <!-- Wrapping card in <a> tag to make it clickable -->
                        <a href="/quran/surah/{{ $item->nomor }}">
                            <div class="card mt-3 mb-3 shadow">
                                <div class="card-body">
                                    <div class="float-start">
                                        <span class="fs-5 fw-bold text-light">{{ $item->nama_latin }}</span><br>
                                        <i class="text-light">{{ $item->arti }}</i>
                                    </div>
                                    <div class="float-end">
                                        <i class="bi bi-arrow-right fs-3"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <footer>
        <p>Developed by Rafi.nataa</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
