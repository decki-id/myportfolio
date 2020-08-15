// Responsive Sidebar

const
    navTogglerButton = document.querySelector(".nav-toggler"),
    studentSidebar = document.querySelector(".students-sidebar");


navTogglerButton.addEventListener("click", () => {
    sidebarSectionTogglerButton();
})

function sidebarSectionTogglerButton() {
    navTogglerButton.classList.toggle("click");
    studentSidebar.classList.toggle("click");
}
