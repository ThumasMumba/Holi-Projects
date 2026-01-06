document.getElementById("sign-btn").onclick = function () {
  document.querySelector(".signUp-card").style.display = "block";
};

function patient() {
  window.location.href = "signUp.html";
}
function doctor() {
  window.location.href = "doctorSignIn.html";
}
