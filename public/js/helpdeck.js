/* Responsive Sidebar & User Dropdown */

const
    navToggler = document.querySelector(".dhs-topbar .dhs-navtoggler"),
    userIcon = document.querySelector(" .dhs-topbar .dhs-usericon .dhs-profilepicture"),
    userDropdown = document.querySelector(".dhs-userdropdownmenu"),
    sidebar = document.querySelector(".dhs-sidebar"),
    navLink = document.querySelectorAll(".dhs-sidebar .dhs-navlink"),
    navIcon = document.querySelectorAll(".dhs-sidebar .dhs-navlink .fas"),
    navText = document.querySelectorAll(".dhs-sidebar .dhs-navlink .dhs-navtext"),
    a = window.matchMedia("(max-width: 991px)"),
    isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);

navToggler.addEventListener("click", () => {
    if (userDropdown.classList.contains("show")) {
        userDropdown.classList.remove("show");
    }
    if (a.matches || isMobile) {
        sidebar.classList.remove("show");
        for (let i = 0; i < navText.length; i++) {
            navText[i].classList.remove("show");
        }
        for (let a = 0; a < navIcon.length; a++) {
            navIcon[a].classList.remove("show");
        }
        for (let x = 0; x < navLink.length; x++) {
            navLink[x].classList.remove("show");
        }
        sidebar.classList.toggle("mobile");
    } else {
        sidebar.classList.remove("mobile");
        sidebar.classList.toggle("show");
        for (let i = 0; i < navText.length; i++) {
            navText[i].classList.toggle("show");
        }
        for (let a = 0; a < navIcon.length; a++) {
            navIcon[a].classList.toggle("show");
        }
        for (let x = 0; x < navLink.length; x++) {
            navLink[x].classList.toggle("show");
        }
    }
})

for (let x = 0; x < navLink.length; x++) {
    if (navLink[x].classList.contains("show")) {
        navLink[x].addEventListener("mouseover", () => {
            for (let i = 0; i < navText.length; i++) {
                if (navLink[x] == navText[i] && navText[i].classList.contains("show")) {

                }
            }
        })
    }
}

userIcon.addEventListener("click", () => {
    userDropdown.classList.toggle("show");
})

document.addEventListener("keyup", function (event) {
    if (userDropdown.classList.contains("show") && event.which == 27) {
        userDropdown.classList.remove("show");
    }
})
