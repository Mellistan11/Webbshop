const body = document.getElementById("body");
const sidebar = document.getElementById("sidebar");

// searchbar.
const input = document.getElementById("searchInput");
const searchbar = document.getElementById("searchbar");
const searchButton = document.querySelector(".searchButton");

// sidebar nav.
const dropdownButton = document.querySelectorAll(".dropdownButton");
const allSidebarNavs = document.querySelectorAll(".sidebarNav");


input.addEventListener("focus", () => {
    body.classList.add("sidebarExtended");

    allSidebarNavs.forEach(sidebarNav => {
        sidebarNav.classList.remove("dropped");
    })
})

input.addEventListener("blur", () => {
    body.classList.remove("sidebarExtended");
})

searchbar.addEventListener("submit", (e) => {
    e.preventDefault();
    input.blur();
})

searchButton.addEventListener("click", () => {
    input.blur();

})


dropdownButton.forEach(button => {
    button.addEventListener("click", function() {
        const current = this.closest(".sidebarNav");

        allSidebarNavs.forEach(sidebarNav => {
            if (sidebarNav !== current) {
                sidebarNav.classList.remove("dropped");
            } // removes every other sidebarNav that has the class "dropped".
        })

        current.classList.toggle("dropped");
    })
})