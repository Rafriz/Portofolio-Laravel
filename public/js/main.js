// ==========================
// AOS Animation
// ==========================

AOS.init({
    duration: 1000,
    once: true,
    offset: 100,
});

// ==========================
// Typed.js
// ==========================

const typing = document.getElementById("typing");

if (typing) {
    new Typed("#typing", {
        strings: [
            "Laravel Developer",
            "Frontend Developer",
            "Backend Developer",
            "Full Stack Web Developer"
        ],
        typeSpeed: 70,
        backSpeed: 40,
        backDelay: 1500,
        loop: true
    });
}

// ==========================
// Navbar Background
// ==========================

const navbar = document.querySelector(".navbar");

window.addEventListener("scroll", () => {

    if (window.scrollY > 50) {

        navbar.style.background = "rgba(15,23,42,.95)";
        navbar.style.boxShadow = "0 10px 25px rgba(0,0,0,.3)";

    } else {

        navbar.style.background = "rgba(15,23,42,.7)";
        navbar.style.boxShadow = "none";

    }

});

// ==========================
// Scroll Reveal Animation
// ==========================

const cards = document.querySelectorAll(
    ".preview-card,.skill-card,.project-card,.info-box"
);

const observer = new IntersectionObserver((entries)=>{

    entries.forEach(entry=>{

        if(entry.isIntersecting){

            entry.target.classList.add("show");

        }

    });

},{
    threshold:0.2
});

cards.forEach(card=>{
    observer.observe(card);
});

// ==========================
// Smooth Hover Effect
// ==========================

document.querySelectorAll(".btn").forEach(btn=>{

    btn.addEventListener("mouseenter",()=>{

        btn.style.transform="translateY(-4px)";

    });

    btn.addEventListener("mouseleave",()=>{

        btn.style.transform="translateY(0px)";

    });

});