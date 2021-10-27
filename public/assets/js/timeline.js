var modalBtn = document.querySelectorAll(".modal-btn");
var modalBg = document.querySelector(".modal-bg");
var modalClose=document.querySelector('.modal-close');

for (let i = 0; i < modalBtn.length; i++) {
    modalBtn[i].addEventListener("click", function () {
        modalBg.classList.add("bg-active");
    });
}
modalClose.addEventListener("click", function () {
    modalBg.classList.remove('bg-active');
});

function edit(item) {
    document.getElementById("id").value = item.id;
    document.getElementById("city").value = item.city;
    document.getElementById("hotel").value = item.hotel;
    document.getElementById("services").value = item.services;
    document.getElementById("staytime").value = item.staytime;
}