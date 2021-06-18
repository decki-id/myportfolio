const
    createCourseButton = document.querySelector("#create-course_button"),
    createRoleButton = document.querySelector("#create-role_button"),
    createUserButton = document.querySelector("#create-user_button");

if (createCourseButton) {
    createCourseButton.addEventListener("click", () => {
        setTimeout(function () {
            document.querySelector("#course_name-create").focus();
        }, 100);
    });
}

if (createRoleButton) {
    createRoleButton.addEventListener("click", () => {
        setTimeout(function () {
            document.querySelector("#role_name-create").focus();
        }, 100);
    });
}

if (createUserButton) {
    createUserButton.addEventListener("click", () => {
        setTimeout(function () {
            document.querySelector("#username-create").focus();
        }, 100);
    });
}