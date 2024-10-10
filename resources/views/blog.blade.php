<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo.png">
    <title>Blog</title>
    {{-- <link rel="stylesheet" href="css/home.css"> --}}
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="css/blog.css">
</head>

<body class="h-full">
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
    <div class="min-h-full">
        <nav class="bg-slate-500 sticky top-0 z-50" x-data="{ isOpen: false }">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <a href="/">
                                <img class="h-8 w-8 transform transition-transform duration-500 hover:scale-125 select-none"
                                    src="img/logo.png" alt="Your Company">
                            </a>
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                <a href="/"
                                    class="rounded-3xl px-3 py-2 text-sm font-medium text-gray-300 hover:bg-slate-400 hover:text-white duration-500 select-none"
                                    aria-current="page">Home</a>
                                <a href="/about"
                                    class="rounded-3xl px-3 py-2 text-sm font-medium text-gray-300 hover:bg-slate-400 hover:text-white duration-500 select-none">About</a>
                                <a href="/blog"
                                    class="rounded-3xl  bg-slate-600 px-3 py-2 text-sm font-medium text-white hover:bg-slate-400 hover:text-white duration-500 select-none">Blog</a>
                                <a href="/contact"
                                    class="rounded-3xl px-3 py-2 text-sm font-medium text-gray-300 hover:bg-slate-400 hover:text-white duration-500 select-none">Contact</a>
                                {{-- <a href="#"
                                    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Reports</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-4 flex items-center md:ml-6">
                            {{-- <button type="button"
                                class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">View notifications</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                </svg>
                            </button> --}}

                            <!-- Profile dropdown -->
                            <div class="relative ml-3">
                                <div>
                                    <button type="button" @click="isOpen = !isOpen"
                                        class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="absolute -inset-1.5"></span>
                                        <span class="sr-only">Open user menu</span>
                                        {{-- <img class="h-8 w-8 rounded-full select-none" src="img/irving.jpg" alt=""> --}}
                                    </button>
                                </div>

                                <!--
                  Dropdown menu, show/hide based on menu state.
  
                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
                                {{-- <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
                                    x-transition:enter-start="opacity-0 scale-95"
                                    x-transition:enter-end="opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75 transform"
                                    x-transition:leave-start="opacity-100 scale-100"
                                    x-transition:leave-end="opacity-0 scale-95"class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                    tabindex="-1">
                                    <!-- Active: "bg-gray-100", Not Active: "" -->
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-1">Settings</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                        tabindex="-1" id="user-menu-item-2">Sign out</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="-mr-2 flex md:hidden">
                        <!-- Mobile menu button -->
                        <button type="button" @click="isOpen = !isOpen"
                            class="relative inline-flex items-center justify-center bg-transparent p-2 text-white"
                            aria-controls="mobile-menu" aria-expanded="false">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <!-- Menu open: "hidden", Menu closed: "block" -->
                            <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div x-show = 'isOpen' class="md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="/" class="block rounded-3xl px-3 py-2 text-base font-medium text-gray-300"
                        aria-current="page">Home</a>
                    <a href="/about"
                        class="block rounded-3xl px-3 py-2 text-base font-medium text-gray-300 hover:bg-slate-400 hover:text-white">About</a>
                    <a href="/blog"
                        class="block rounded-2xl bg-slate-600 px-3 py-2 text-base font-medium text-white hover:bg-slate-400 hover:text-white">Blog</a>
                    <a href="/contact"
                        class="block rounded-3xl px-3 py-2 text-base font-medium text-gray-300 hover:bg-slate-400 hover:text-white">Contact</a>
                </div>
                <div class="border-t border-gray-700 pb-3 pt-4">
                    <div class="flex items-center px-5">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="img/irving.jpg" alt="">
                        </div>
                        <div class="ml-3">
                            <div class="text-base font-medium leading-none text-white">Irving</div>
                            <div class="text-sm font-medium leading-none text-gray-400">irving@gmail.com</div>
                        </div>
                        {{-- <button type="button"
                            class="relative ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View notifications</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                        </button> --}}
                    </div>
                    <div class="mt-3 space-y-1 px-2">
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your
                            Profile</a>
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
                        <a href="#"
                            class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign
                            out</a>
                    </div>
                </div>
            </div>
        </nav>

        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900 select-none">Blog</h1>
            </div>
        </header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{-- artikel 1 --}}
                <article">
                    <h3 class="font-bold uppercase text-center mb-6">Cara Efektif Mengatur Waktu untuk Meningkatkan
                        Produktivitas
                        <hr class="border-gray-300 my-4 w-20 mx-auto border-t-4 rounded">
                    </h3>

                    <p class="text-gray-500 mb-6 text-justify">Mengatur waktu secara efektif adalah kunci untuk
                        mencapai
                        produktivitas yang maksimal, terutama di
                        dunia yang penuh dengan distraksi seperti sekarang. Banyak orang merasa bahwa waktu yang
                        mereka
                        miliki dalam
                        sehari tidak cukup untuk menyelesaikan semua tugas. Namun, dengan strategi manajemen waktu
                        yang
                        tepat, Anda
                        dapat menyelesaikan lebih banyak pekerjaan tanpa merasa kewalahan.

                    <ul class="text-justify">
                        <li><b>Tentukan Prioritas</b> Langkah pertama dalam mengelola waktu dengan baik adalah
                            menentukan prioritas.
                            Cobalah untuk menggunakan metode seperti Eisenhower Matrix, yang membagi tugas menjadi
                            empat
                            kuadran:
                            penting dan mendesak, penting tapi tidak mendesak, tidak penting tapi mendesak, dan
                            tidak
                            penting serta
                            tidak mendesak. Fokuslah pada tugas yang penting dan mendesak terlebih dahulu.</li>
                        <li><b>Gunakan Teknik Pomodoro</b> Teknik Pomodoro adalah salah satu metode manajemen waktu
                            yang
                            efektif. Anda
                            bekerja selama 25 menit tanpa distraksi, kemudian beristirahat selama 5 menit. Setelah
                            empat
                            sesi, ambil
                            istirahat yang lebih panjang, sekitar 15-30 menit. Dengan cara ini, Anda dapat menjaga
                            konsentrasi tanpa
                            merasa lelah.</li>
                        <li class="mb-6"><b>Hindari Multitasking</b> Multitasking sering dianggap sebagai cara
                            untuk
                            menyelesaikan
                            lebih banyak
                            pekerjaan, padahal kenyataannya dapat menurunkan kualitas kerja dan membuat pekerjaan
                            menjadi lebih
                            lama. Sebaiknya fokus pada satu tugas hingga selesai sebelum beralih ke tugas
                            berikutnya.
                        </li>
                    </ul>
                    </article>
                    <article>
                        {{-- artikel 2 --}}
                        <h3 class="font-bold uppercase text-center mb-6">Pentingnya Menjaga Kesehatan Mental di Era
                            Digital
                            <hr class="border-gray-300 my-4 w-20 mx-auto border-t-4 rounded">
                        </h3>

                        <p class="text-gray-500 mb-6 text-justify">Di era digital saat ini, akses informasi dan
                            konektivitas terus meningkat, tetapi begitu pula
                            tekanan yang dirasakan banyak orang. Kesehatan mental sering kali terganggu akibat
                            paparan
                            berlebihan terhadap
                            media sosial, berita, dan tekanan untuk selalu produktif. Oleh karena itu, menjaga
                            kesehatan
                            mental menjadi
                            semakin penting.

                        <ul class="text-justify">
                            <li><b>Batasi Penggunaan Media Sosial</b> Media sosial bisa menjadi sumber stres jika
                                tidak
                                digunakan dengan bijak.
                                Banyak orang merasa tertekan untuk menampilkan kehidupan yang "sempurna," atau
                                merasa
                                cemas
                                ketika
                                membandingkan diri mereka dengan orang lain. Batasi waktu Anda di media sosial dan
                                fokuslah
                                pada
                                interaksi yang positif dan bermanfaat.</li>
                            <li><b>Praktikkan Mindfulness</b> Mindfulness adalah praktik untuk hadir sepenuhnya
                                dalam
                                momen
                                saat ini. Melalui
                                meditasi atau pernapasan dalam, Anda bisa mengurangi kecemasan dan stres. Berlatih
                                mindfulness dapat
                                membantu menenangkan pikiran dan mengatasi beban mental yang mungkin Anda rasakan.
                            </li>
                            <li class="mb-6"><b>jaga Keseimbangan Hidup</b> Keseimbangan antara pekerjaan dan
                                kehidupan
                                pribadi adalah kunci untuk menjaga
                                kesehatan mental. Luangkan waktu untuk diri sendiri, keluarga, dan hobi yang Anda
                                nikmati.
                                Jangan
                                biarkan pekerjaan atau aktivitas online mengambil alih seluruh hidup Anda.
                            </li>
                        </ul>
                    </article>

                    <div class="text-right py-5 text-xs">
                        <a href="/blog-lain"
                            class="border rounded-3xl p-2.5 bg-slate-600 text-white hover:bg-slate-400 hover:text-white font-semibold select-none duration-200">Baca
                            Yang Lainnya &raquo;</a>
                    </div>
            </div>
        </main>
    </div>

</body>

</html>
