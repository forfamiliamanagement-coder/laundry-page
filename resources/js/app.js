import './bootstrap';

window.addEventListener("scroll", function () {
    const nav = document.getElementById("navbar");

    if (window.scrollY > 50) {
        nav.classList.add("bg-white", "shadow-md", "text-black");
        nav.classList.remove("bg-transparent", "text-white");
    } else {
        nav.classList.add("bg-transparent", "text-white");
        nav.classList.remove("bg-white", "shadow-md", "text-black");
    }
});

function revealOnScroll() {
    const reveals = document.querySelectorAll(".reveal");

    reveals.forEach((el) => {
        const windowHeight = window.innerHeight;
        const elementTop = el.getBoundingClientRect().top;

        if (elementTop < windowHeight - 100) {
            el.classList.add("active");
        }
    });
}

window.addEventListener("scroll", revealOnScroll);