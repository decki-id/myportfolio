/* User Dropdown */

const
    navToggler = document.querySelector(".dhs-navtoggler"),
    userIcon = document.querySelector(".dhs-usericon .dhs-profilepicture"),
    userDropdown = document.querySelector(".dhs-userdropdownmenu");

navToggler.addEventListener("click", () => {
    if (userDropdown.classList.contains("click")) {
        userDropdown.classList.remove("click");
    }
})

userIcon.addEventListener("click", () => {
    userDropdown.classList.toggle("click");
})

document.addEventListener("keyup", function (event) {
    if (userDropdown.classList.contains("click") && event.which == 27) {
        userDropdown.classList.remove("click");
    }
})
