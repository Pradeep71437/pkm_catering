function checkAll(myCheckbox) {
    var checkboxes = myCheckbox.parentNode.parentNode.querySelectorAll(".dropdown-menu input[type='checkbox']");
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = myCheckbox.checked;
    });
}