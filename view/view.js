document.addEventListener("DOMContentLoaded", () => {
    const divs = document.querySelectorAll(".full-width-div");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
            } else {
                entry.target.classList.remove("visible"); // Remove the class when out of view
            }
        });
    });

    divs.forEach((div) => observer.observe(div));
});
function filterDivs() {
    const searchInput = document.getElementById("search-bar").value.toLowerCase();
    const divs = document.querySelectorAll(".full-width-div");

    divs.forEach((div) => {
        const companyName = div.getAttribute("data-name").toLowerCase();
        if (companyName.includes(searchInput)) {
            div.classList.remove("hidden"); // Show matching divs
        } else {
            div.classList.add("hidden"); // Hide non-matching divs
        }
    });
}