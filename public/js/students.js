// Responsive Sidebar

const
    navTogglerButton = document.querySelector(".nav-toggler"),
    studentSidebar = document.querySelector(".students-sidebar"),
    navSide = document.querySelector(".navbar-side"),
    students = document.querySelector(".students");

navTogglerButton.addEventListener("click", () => {
    sidebarSectionTogglerButton();
})

function sidebarSectionTogglerButton() {
    studentSidebar.classList.toggle("hide");
    navSide.classList.toggle("hide");
    students.classList.toggle("hide");
}
