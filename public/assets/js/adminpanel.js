var modalBtn = document.querySelectorAll(".modal-btn");
var modalBg = document.querySelector(".modal-bg");
var modalClose = document.querySelector(".modal-close");

for (let i = 0; i < modalBtn.length; i++) {
    modalBtn[i].addEventListener("click", function() {
        modalBg.classList.add("bg-active");
    });
}
modalClose.addEventListener("click", function() {
    modalBg.classList.remove("bg-active");
});

var modalBgAdd = document.querySelector(".modal-bg-add");
var modalButton = document.querySelector(".modal-button");
var modalCloseAdd = document.querySelector(".modal-close-add");
modalButton.addEventListener("click", function() {
    modalBgAdd.classList.add("bg-active-add");
});

modalCloseAdd.addEventListener("click", function() {
    modalBgAdd.classList.remove("bg-active-add");
});

var modalBgInfo = document.querySelector(".modal-bg-info");
var modalButtonInfo = document.querySelector(".modal-info");
var modalCloseInfo = document.querySelector(".modal-close-info");
modalButtonInfo.addEventListener("click", function() {
    modalBgInfo.classList.add("bg-active-info");
});

modalCloseInfo.addEventListener("click", function() {
    modalBgInfo.classList.remove("bg-active-info");
});

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
    document.getElementById("travelcompany").value = item.travelcompany;
    document.getElementById("tag").value = item.tag;
    document.getElementById("type").value = item.type;
    document.getElementById("image").value = item.image;
}

function addtimeline(item) {
    document.getElementById("tour_id").value = item.id;
    sessionStorage.setItem("tour_id", item.id);
}

function editinfo(admin) {
    console.log(admin.id);
    document.getElementById("idi").value = admin.id;
    document.getElementById("firstname").value = admin.firstname;
    document.getElementById("lastname").value = admin.lastname;
    document.getElementById("email").value = admin.email;
    document.getElementById("username").value = admin.username;
    document.getElementById("phonenumber").value = admin.phonenumber;
}
