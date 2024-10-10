<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="css/blog.css">
    <link rel="icon" href="img/logo.png">
    <title>Lainnya</title>
</head>

<body class="h-full">
    <div class="min-h-full">

        <header class="bg-white shadow sticky top-0 z-50">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900 select-none">Artikel Lainnya</h1>
            </div>
        </header>

        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 bg">
                @foreach ($blogs as $blog)
                    <div class="p-2.5 px-0">
                        <article class="bg-white rounded-xl p-6 shadow-sm select-none">
                            <h3 class="font-bold uppercase mb-6">{{ $blog->title }} {{-- |  $blog->formatted_created_at  }} --}}
                                <hr class="border-gray-300 my-7 w-32 border-t-4 rounded mx-1">
                            </h3>
                            <h4 class="font-semibold text-gray-700 select-none">
                                Penulis: {{ $blog->penulis->name }}
                            </h4>

                            <p class="text-gray-500 mb-6 text-justify">{{ Str::limit($blog->isi, 50) }}</p>
                            <div class="pb-7 select-none">
                                <p class="font-medium text-gray-700 text-sm">
                                    {{ $blog->created_at->diffForHumans() }}
                                </p>
                            </div>
                            <div class="hover:text-blue-400 font-semibold duration-200 text-sm">
                                <a href="/blog-lain/{{ $blog->slug }}" class="inline-flex items-center">Baca lebih
                                    lanjut <x-maki-arrow class="h-4 w-4 ml-2" /></a>
                            </div>
                        </article>
                    </div>

                    {{-- <hr class="p-2"> --}}
                @endforeach
                {{ $blogs->links() }}
                <div class="text-left py-8 text-xs">
                    <a href="/blog"
                        class="border rounded-3xl p-2.5 bg-slate-600 text-white hover:bg-slate-400 hover:text-white font-semibold select-none duration-200">
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
