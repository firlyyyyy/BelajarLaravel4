document.querySelectorAll('a').forEach(anchor => {
    anchor.addEventListener('click', function () {
        localStorage.setItem('scrollPosition', window.scrollY); // Simpan posisi scroll
    });
});

// window.addEventListener('load', function() {
//     if (localStorage.getItem('scrollPosition') !== null) {
//         window.scrollTo(0, localStorage.getItem('scrollPosition')); // Ambil posisi scroll yang tersimpan
//         localStorage.removeItem('scrollPosition'); // Hapus posisi scroll setelah digunakan
//     }
// });

window.addEventListener('load', function () {
    const scrollPosition = localStorage.getItem('scrollPosition');
    if (scrollPosition !== null) {
        window.scrollTo(0, parseInt(scrollPosition, 10));
        localStorage.removeItem('scrollPosition')
    }
})