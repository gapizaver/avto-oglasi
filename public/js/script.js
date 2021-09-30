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

// toggle display of dropdown
function onClick() {
    var dd = document.getElementById("dropdown");
    dd.classList.toggle("hidden");
    dd.classList.toggle("block");
}


$(document).ready(function(){
    // remove notifications after 8 seconds
    setTimeout(function() {
        $(".notification").slideUp();
    }, 5000);

    // remove notification when user clicks "x"
    $(".remove-notification").click(function(e) {
        $(this).parent().parent().slideUp();
    });

    // toggle menu on mobile
    $("#menu-button").click(function(e) {
        if ($("#header-menu").hasClass("hidden")) {
            $("#header-menu").slideDown();
        } else {
            $("#header-menu").slideUp(400, "swing", function() {
                $("#header-menu").css("display", "");
            });
        }

        $("#header-menu").toggleClass("hidden");
    });

    // change main image in ad.blade
    $(".img-sm").click(function(e){
        $("#img-main").attr("src", this.src);

        $(".img-sm").each(function(i) {
            $(this).removeClass("border-4");
        });

        $(this).addClass("border-4");
    });

    /*
    *   Uploading images in createad.blade
    */

    var imageCount = 0;

    // image upload handler
    $("#img_input").change(function() {
        // newly uploaded images
        let images = $(this)[0].files;

        $("#image-label span").text("Ponovno naloži fotografije")

        // check if more than 5 images already
        if (images.length > 5) {
            alert("naložite lahko največ 5 fotografij!");
            return;
        }

        $("#img-holder").empty();
        // loop through images
        for (let i = 0; i < images.length; i++) {
            // append image "description"
            $("#img-holder").append(
                '<div class="mb-1 p-1.5 flex justify-between w-full rounded-md bg-gray-100"><p class="text-gray-700 text-sm">'+ images[i].name +'</p></div>'
            );
        };
    });
});
