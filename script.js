document.addEventListener("DOMContentLoaded", () => {
    const menuLinks = document.querySelectorAll('nav a');

    menuLinks.forEach(link => {
        link.addEventListener("click", function(event) {
            event.preventDefault(); // Menghentikan default behavior

            // Mengambil target dari href
            const targetId = this.getAttribute("href").substring(1);
            const targetSection = document.getElementById(targetId);

            if (targetSection) {
                // Menggeser scroll ke bagian yang dituju
                window.scrollTo({
                    top: targetSection.offsetTop,
                    behavior: "smooth"
                });
            }
        });
    });

    // Mendeteksi scrolling
    window.addEventListener('scroll', () => {
        const nav = document.querySelector('nav');
        const isTop = window.scrollY < nav.offsetHeight;

        if (isTop) {
            nav.classList.remove('sticky');
        } else {
            nav.classList.add('sticky');
        }
    });
});
