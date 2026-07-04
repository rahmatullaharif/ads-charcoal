window.addEventListener("scroll", function() {
    const header = document.getElementById("header");

    if (window.scrollY > 80) {
        header.classList.add("scrolled");
    } else {
        header.classList.remove("scrolled");
    }
});