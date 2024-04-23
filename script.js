document.addEventListener("DOMContentLoaded", () => {
    const menuLinks = document.querySelectorAll('nav a');

    menuLinks.forEach(link => {
        link.addEventListener("click", function(event) {
            event.preventDefault(); 

          
            const targetId = this.getAttribute("href").substring(1);
            const targetSection = document.getElementById(targetId);

            if (targetSection) {
             
                window.scrollTo({
                    top: targetSection.offsetTop,
                    behavior: "smooth"
                });
            }
        });
    });


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
