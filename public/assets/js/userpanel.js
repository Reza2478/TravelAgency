var modalBtn = document.querySelector(".modal-btn");
var modalBg = document.querySelector(".modal-bg");
var modalClose = document.querySelector(".modal-close");

modalBtn.addEventListener("click", function() {
    modalBg.classList.add("bg-active");
});
modalClose.addEventListener("click", function() {
    modalBg.classList.remove("bg-active");
});

function edit(user) {
    document.getElementById("id").value = user.id;
    document.getElementById("firstname").value = user.firstname;
    document.getElementById("lastname").value = user.lastname;
    document.getElementById("email").value = user.email;
    document.getElementById("username").value = user.username;
    document.getElementById("phonenumber").value = user.phonenumber;
}
