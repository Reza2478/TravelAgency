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
})

var modalBgAdd = document.querySelector('.modal-bg-add');
var modalButton=document.querySelector('.modal-button');
var modalCloseAdd=document.querySelector('.modal-close-add');
modalButton.addEventListener("click", function () {
    modalBgAdd.classList.add("bg-active-add");
});

modalCloseAdd.addEventListener("click", function () {
    modalBgAdd.classList.remove("bg-active-add");
})

function edit(item) {
    document.getElementById("id").value = item.id;
    document.getElementById("from").value = item.from;
    document.getElementById("to").value = item.to;
    document.getElementById("amount").value = item.amount;
    document.getElementById("capacity").value = item.capacity;
    document.getElementById("departuredate").value = item.departuredate;
    document.getElementById("returndate").value = item.returndate;
    document.getElementById("timewent").value = item.timewent;
    document.getElementById("timeback").value = item.timeback;
    document.getElementById("sale").value = item.sale;
    document.getElementById("staytime").value = item.staytime;
    document.getElementById("hotel").value = item.hotel;
    document.getElementById("travelcompany").value = item.travelcompany;
    document.getElementById("tag").value = item.tag;
    document.getElementById("type").value = item.type;
    document.getElementById("services").value = item.services;
    document.getElementById("image").value = item.image;
}
function addtimeline(item) {
    document.getElementById("tour_id").value = item.id;
    document.getElementById("add").style.display = "block";
}
