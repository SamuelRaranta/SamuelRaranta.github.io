document.addEventListener("DOMContentLoaded", function() {
    const menu = document.querySelector("nav");
    const menuLinks = document.querySelectorAll("nav ul li a");

    // Mengaktifkan event listener saat menekan link menu
    menuLinks.forEach(link => {
        link.addEventListener("click", function(event) {
            event.preventDefault();
            const targetId = this.getAttribute("href").substring(1);
            const targetSection = document.getElementById(targetId);
            targetSection.scrollIntoView({ behavior: "smooth" });
        });
    });
});
