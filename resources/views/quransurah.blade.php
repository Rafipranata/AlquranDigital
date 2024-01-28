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
            background-color: var(--Color-default-5);
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
            font-family: var(--Font-default-2);
        }

        .table .box .description {
            font-size: 17px;
            text-align: right;
        }

        .box-ind .btn {
            background-color: var(--Color-default-5);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top shadow-sm p-2" id="navbar">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand fw-bold fs-2" href="https://www.instagram.com/duta.code/?igsh=NzZnOTIwa3Y2ZDYz">
                Duta
                <span class="navbar-brand-fo">Quran</span>
            </a>
            <a href="/" class="btn-arrow ms-auto shadow-sm fs-4 px-1 rounded">
                <i class="bi bi-arrow-left mx-1 text-white"></i>
            </a>
            <button class="btn-mode fs-4 border-0 shadow-sm rounded ms-2 px-1" id="darkModeToggle">
                <i class="bi bi-cloud-sun-fill mx-1 text-white" id="darkModeIcon"></i>
            </button>
        </div>
    </nav>
    <section class="box-fill py-5">
        @if ($response->nomor != 1 && $response->nomor != 9)
            <div class="text-center fw-bold fs-2 mt-5" style="font-family: Noto Naskh Arabic">
                <p>بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</p>
            </div>
            <table class="table">
                <tbody class="container border-2">
                    <th class="float-start">
                        <p>First</p>
                        <p>Name</p>
                    </th>
                    <th class="float-end">
                        <p>First</p>
                        <p>Name</p>
                    </th>
                </tbody>
            </table>
        @endif
        <div class="container my-4">
            <div class="table-responsive">
                <table class="table table-borderless">
                    <tbody>
                        @foreach ($response->ayat as $ayat)
                            <tr>
                                <td class="box">
                                    <div class="ayat fs-1 fw-bolder mt-4 mb-2 text-break lh-lg">{{ $ayat->ar }}
                                    </div>
                                    <div class="description text-dark-emphasis mb-2">{!! $ayat->tr !!}</div>
                                </td>
                            </tr>
                            <tr>
                                <td class="box-ind">
                                    <div class="arti mt-2 mb-3 fs-6 lh-base">{{ $loop->iteration }}. {{ $ayat->idn }}
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
                    class="btn rounded text-white float-left" style="background-color: var(--Color-default-5)">
                    <i class="bi bi-arrow-left mx-1 text-white"></i>
                    SEBELUMNYA
                </a>
            @endif
            @if ($response->surat_selanjutnya)
                <a href="/quran/surah/{{ $response->surat_selanjutnya->nomor }}"
                    class="btn rounded text-white float-end" style="background-color: var(--Color-default-5)">
                    SELANJUTNYA
                    <i class="bi bi-arrow-right mx-1"></i>
                </a>
            @endif
        </div>
    </section>
    <script>
        (() => {
            const getStoredTheme = () => localStorage.getItem('theme') || (window.matchMedia(
                '(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
            const setStoredTheme = theme => localStorage.setItem('theme', theme);
            const setTheme = theme => document.documentElement.setAttribute('data-bs-theme', theme);
            const updateDarkModeStatus = () => {
                const darkModeStatus = document.getElementById('darkModeStatus');
                if (darkModeStatus) {
                    const currentTheme = getStoredTheme();
                    darkModeStatus.textContent = ` (${currentTheme === 'dark' ? 'Dark' : 'Light'} Mode)`;
                }
            };
            const updateIcon = () => {
                const currentTheme = getStoredTheme();
                const icon = document.getElementById('darkModeIcon');
                if (icon) {
                    icon.classList.remove('bi-moon-stars-fill', 'text-light', 'bi-cloud-sun-fill', 'text-dark');
                    icon.classList.add(currentTheme === 'dark' ? 'bi-moon-stars-fill' : 'bi-cloud-sun-fill',
                        'text-white');
                }
            };
            const toggleTheme = () => {
                const currentTheme = getStoredTheme();
                const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
                setStoredTheme(newTheme);
                setTheme(newTheme);
                updateDarkModeStatus();
                updateIcon();
            };
            const darkModeToggle = document.getElementById('darkModeToggle');
            if (darkModeToggle) {
                darkModeToggle.addEventListener('click', toggleTheme);
            }
            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                const storedTheme = getStoredTheme();
                if (storedTheme !== 'light' && storedTheme !== 'dark') {
                    setTheme(storedTheme);
                    updateDarkModeStatus();
                    updateIcon();
                }
            });
            setTheme(getStoredTheme());
            updateDarkModeStatus();
            updateIcon();
        })();
        let lastScrollTop = 0;
        window.addEventListener("scroll", function() {
            let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
            let navbar = document.getElementById("navbar");
            if (currentScroll > lastScrollTop) {
                navbar.style.transform = "translateY(-100%)";
            } else {
                navbar.style.transform = "translateY(0)";
            }
            lastScrollTop = currentScroll <= 0 ? 0 : currentScroll;
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
