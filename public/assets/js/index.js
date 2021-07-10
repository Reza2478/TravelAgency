$(document).ready(function(){
    $(".dropdown").click(function(){
        $(".dropdown-list ul").toggleClass("active");
    });

    $(".dropdown-list ul li").click(function(){
        var icon_text=$(this).html();
        $(".default-option").html(icon_text);
    });

    $(document).on("click",function(event){
        if(!$(event.target).closest(".dropdown").length){
            $(".dropdown-list ul").removeClass("active");
        }
    });
});
$(document).ready(function () {
    $("#owl-demo").owlCarousel({
        autoPlay: true
    });
});
$(document).ready(function () {
    $(".rslides").responsiveSlides({
        speed: 800
    });
});
$(document).ready(function () {
    var win = $(window),
        nav = $('.masthead'),
        pos = nav.offset().top,
        sticky = function () {
            win.scrollTop() > pos ? nav.addClass('sticky') : nav.removeClass('sticky')
        }
    win.scroll(sticky)
});
$(document).ready(function () {
    $(".inline").colorbox({
        inline: true,
        width: "450"
    });
});
jQuery(document).ready(function ($) {
    $("#cloud").mCustomScrollbar({
        scrollButtons: {
            enable: true
        },
        theme: "dark-2"
    });
});
jQuery(document).ready(function ($) {
    $(".nav-bar").click(function () {
        $(".responsive-nav ul").toggle(200);
    });
});

document.getElementById("q1").addEventListener("click", openQ1);
document.getElementById("q2").addEventListener("click", openQ2);
document.getElementById("q3").addEventListener("click", openQ3);
document.getElementById("q4").addEventListener("click", openQ4);

function openQ1() {
    document.getElementById("answer1").classList.toggle("active1");
}

function openQ2() {
    document.getElementById("answer2").classList.toggle("active2");
}

function openQ3() {
    document.getElementById("answer3").classList.toggle("active3");
}

function openQ4() {
    document.getElementById("answer4").classList.toggle("active4");
}

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



