const
    createBatchButton = document.querySelector("#create-batch_button"),
    createCourseButton = document.querySelector("#create-course_button"),
    createRoleButton = document.querySelector("#create-role_button"),
    createUserButton = document.querySelector("#create-user_button"),
    batchYearCreate = document.querySelector("#year-create"),
    courseCodeCreate = document.querySelector("#course_code-create"),
    courseNameCreate = document.querySelector("#course_name-create");

if (createBatchButton) {
    createBatchButton.addEventListener("click", () => {
        setTimeout(function () {
            batchYearCreate.focus();
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

function codeValue() {
    var courseName = courseNameCreate.value.toUpperCase();
    var matches = courseName.match(/\b(\w)/g);
    if (matches != null) {
        var acronym = matches.join('');
    }
    if (acronym != null) {
        courseCodeCreate.value = acronym;
    }
}