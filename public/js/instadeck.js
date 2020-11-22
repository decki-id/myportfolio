/* Search Bar Toggle */

function searchToggle() {
    document.querySelector("#dhs_search-bar-responsive").classList.toggle("show");
}

function searchBar() {
    $value = $(this).val();
    index(1);
}

function index(page) {
    var search = $(this).val();

    $.ajax({
        type: "POST",
        data:
    });
}