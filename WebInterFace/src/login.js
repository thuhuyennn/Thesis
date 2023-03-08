//file index
const model = document.querySelector("#model");
const login = document.querySelector("#login");
const close = document.querySelector("#close");

function openCar() {
  model.classList.toggle("invisible");
}
function closeCar() {
  model.classList.toggle("invisible");
}
login.addEventListener("click", openCar);
close.addEventListener("click", closeCar);
