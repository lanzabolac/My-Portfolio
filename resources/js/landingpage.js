    // about image 
    const aboutImage = document.querySelector('.aboutme-image');
    aboutImage.addEventListener('click', () => {
        aboutImage.classList.toggle('flipped');
    });

// nav scroll page
document.addEventListener("DOMContentLoaded", () => {
    const sections = document.querySelectorAll("#home, #about, #experience, #projects");
    const navLinks = document.querySelectorAll(".nav-link");

    window.addEventListener("scroll", () => {
        let current = "";

        const triggerPoint = window.innerHeight / 2; 

        sections.forEach(section => {
            const rect = section.getBoundingClientRect();

            // check if section crosses middle of screen
            if (rect.top <= triggerPoint && rect.bottom >= triggerPoint) {
                current = section.getAttribute("id");
            }
        });

        navLinks.forEach(link => {
            link.addEventListener("click", function(e) {
                const targetId = this.getAttribute("href");
                const target = document.querySelector(targetId);
                target.scrollIntoView({ behavior: "smooth" });
            });
        });
    });


    // smooth scroll with offset
    navLinks.forEach(link => {
        link.addEventListener("click", function(e) {
            e.preventDefault();

            const targetId = this.getAttribute("href");
            const target = document.querySelector(targetId);

            const offset = 90; 

            const position = target.offsetTop - offset;

            window.scrollTo({
                top: position,
                behavior: "smooth"
            });
        });
    });


    const reveals = document.querySelectorAll(".reveal");

    window.addEventListener("scroll", () => {
        const windowHeight = window.innerHeight;

        reveals.forEach(el => {
            const elementTop = el.getBoundingClientRect().top;
            const revealPoint = 120;

            if (elementTop < windowHeight - revealPoint) {
                el.classList.add("active");
            } else {
                el.classList.remove("active"); // 🔥 THIS LINE FIXES IT
            }
        });
    });

    window.addEventListener("load", () => {
        document.body.classList.add("loaded");
    });


});