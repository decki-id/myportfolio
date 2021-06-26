const
    createBatchButton = document.querySelector("#create-batch_button"),
    createClassButton = document.querySelector("#create-class_button"),
    createClassroomButton = document.querySelector("#create-classroom_button"),
    createCourseButton = document.querySelector("#create-course_button"),
    createDayButton = document.querySelector("#create-day_button"),
    createRoleButton = document.querySelector("#create-role_button"),
    createUserButton = document.querySelector("#create-user_button"),
    batchYearCreate = document.querySelector("#year-create"),
    classCodeCreate = document.querySelector("#class_code-create"),
    classNameCreate = document.querySelector("#class_name-create"),
    classroomCodeCreate = document.querySelector("#code-create"),
    classroomNameCreate = document.querySelector("#name-create"),
    courseCodeCreate = document.querySelector("#course_code-create"),
    courseNameCreate = document.querySelector("#course_name-create"),
    dayCreate = document.querySelector("#day-create"),
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

if (createClassroomButton) {
    createClassroomButton.addEventListener("click", () => {
        setTimeout(function () {
            classroomNameCreate.focus();
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

if (createDayButton) {
    createDayButton.addEventListener("click", () => {
        setTimeout(function () {
            dayCreate.focus();
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

function classCodeValue() {
    var className = classNameCreate.value.toUpperCase();
    var letter = className.match(/\b(\w)/g);
    if (letter != null) {
        var string = letter.join('');
        classCodeCreate.value = string;
    }
}

function classroomCodeValue() {
    var className = classroomNameCreate.value.toUpperCase();
    var letter = className.match(/\b(\w)/g);
    if (letter != null) {
        var string = letter.join('');
        classroomCodeCreate.value = string;
    }
}

function courseCodeValue() {
    var courseName = courseNameCreate.value.toUpperCase();
    var matches = courseName.match(/\b(\w)/g);
    if (matches != null) {
        var acronym = matches.join('');
        courseCodeCreate.value = acronym;
    }
}