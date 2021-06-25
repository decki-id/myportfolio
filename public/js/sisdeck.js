const
    createBatchButton = document.querySelector("#create-batch_button"),
    createClassButton = document.querySelector("#create-class_button"),
    createCourseButton = document.querySelector("#create-course_button"),
    createRoleButton = document.querySelector("#create-role_button"),
    createUserButton = document.querySelector("#create-user_button"),
    batchYearCreate = document.querySelector("#year-create"),
    classNameCreate = document.querySelector("#class_name-create"),
    courseCodeCreate = document.querySelector("#course_code-create"),
    courseNameCreate = document.querySelector("#course_name-create"),
    roleNameCreate = document.querySelector("#role_name-create"),
    usernameCreate = document.querySelector("#username-create");

if (createBatchButton) {
    createBatchButton.addEventListener("click", () => {
        setTimeout(function () {
            batchYearCreate.focus();
        }, 100);
    });
}

if (createClassButton) {
    createClassButton.addEventListener("click", () => {
        setTimeout(function () {
            classNameCreate.focus();
        }, 100);
    });
}

if (createCourseButton) {
    createCourseButton.addEventListener("click", () => {
        setTimeout(function () {
            courseNameCreate.focus();
        }, 100);
    });
}

if (createRoleButton) {
    createRoleButton.addEventListener("click", () => {
        setTimeout(function () {
            roleNameCreate.focus();
        }, 100);
    });
}

if (createUserButton) {
    createUserButton.addEventListener("click", () => {
        setTimeout(function () {
            usernameCreate.focus();
        }, 100);
    });
}

function courseCodeValue() {
    var courseName = courseNameCreate.value.toUpperCase();
    var matches = courseName.match(/\b(\w)/g);
    if (matches != null) {
        var acronym = matches.join('');
    }
    if (acronym != null) {
        courseCodeCreate.value = acronym;
    }
}