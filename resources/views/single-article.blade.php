<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="css/blog.css">
    <link rel="icon" href="img/logo.png">
    <title>{{ $blog['title'] }}</title>
</head>

<body class="h-full">
    <div class="min-h-full">
        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900 select-none">{{ $blog['title'] }}</h1>
            </div>
        </header>

        <div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8">
            <h3 class="text-lg font-semibold inline-flex items-center">{{ $blog->penulis->name }} <x-phosphor-pencil
                    class="h-6 w-6 ml-2" /> </h3>
        </div>

        <main>
            <div class="mx-auto max-w-7xl px-4 py-0 sm:px-6 lg:px-8">
                <article>
                    <p class="text-gray-500 mb-6 text-justify">{{ $blog['isi'] }}</p>

                    {{-- <ul class="list-disc pl-5">
                        <li class="mb-2">Poin pertama</li>
                        <li class="mb-2">Poin kedua</li>
                        <li class="mb-2">Poin ketiga</li>
                    </ul>            --}}

                </article>
                <div class="text-left py-5 text-xs">
                    <a href="/blog-lain"
                        class="border rounded-3xl p-2 5 bg-slate-600 text-white hover:bg-slate-400 hover:text-white font-semibold select-none duration-200">
                        &laquo; kembali</a>
                </div>
            </div>
        </main>
    </div>

    {{-- <script>
        document.querySelectorAll('a').forEach(anchor => {
            anchor.addEventListener('click', function() {
                localStorage.setItem('scrollPosition', window.scrollY); // Simpan posisi scroll
            });
        });

        // window.addEventListener('load', function() {
        //     if (localStorage.getItem('scrollPosition') !== null) {
        //         window.scrollTo(0, localStorage.getItem('scrollPosition')); // Ambil posisi scroll yang tersimpan
        //         localStorage.removeItem('scrollPosition'); // Hapus posisi scroll setelah digunakan
        //     }
        // });

        window.addEventListener('load', function() {
            const scrollPosition = localStorage.getItem('scrollPosition');
            if (scrollPosition !== null) {
                window.scrollTo(0, parseInt(scrollPosition, 10));
                localStorage.removeItem('scrollPosition')
            }
        })
    </script> --}}
</body>

</html>
