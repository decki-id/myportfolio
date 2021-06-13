const
    createRoleButton = document.querySelector("#create-role_button"),
    createUserButton = document.querySelector("#create-user_button");

if (createRoleButton) {
    createRoleButton.addEventListener("click", () => {
        setTimeout(function () {
            document.querySelector("#role-name_create").focus();
        }, 100);
    });
}

if (createUserButton) {
    createUserButton.addEventListener("click", () => {
        setTimeout(function () {
            document.querySelector("#user-username_create").focus();
        }, 100);
    });
}