// change the hidden input that represents checkboxes of className
function selectCheckbox(className) {
    // checkboxes of className
    var checkboxes = document.getElementsByClassName(className);
    // string of values of checked checkboxes
    var vals = "";
    // fill the vals string
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
            vals += checkboxes[i].id;
        }
    }

    // set the vals to the value of the hidden input
    var input = document.getElementById(className);
    input.value = vals;
}
