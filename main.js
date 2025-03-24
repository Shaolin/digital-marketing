



document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.querySelector(".hamburger");
    const navLinks = document.querySelector(".nav-links");

    hamburger.addEventListener("click", function () {
        navLinks.classList.toggle("active");
        hamburger.classList.toggle("active"); // Toggle X icon
    });
});

// search icon

document.addEventListener("DOMContentLoaded", function () {
    const searchIcon = document.getElementById("searchIcon");
    const searchForm = document.getElementById("searchForm");

    if (searchIcon && searchForm) {
        searchIcon.addEventListener("click", function () {
            searchForm.style.display = (searchForm.style.display === "block") ? "none" : "block";
        });

        // Close search when clicking outside
        document.addEventListener("click", function (event) {
            if (!searchForm.contains(event.target) && !searchIcon.contains(event.target)) {
                searchForm.style.display = "none";
            }
        });
    }
});






