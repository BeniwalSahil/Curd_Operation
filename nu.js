function appendvalue(value) {
  document.getElementById("display").value += value;
}
function calculate() {
  let res = eval(document.getElementById("display").value);
  document.getElementById("display").value = res;
}

function clearscreen() {
  document.getElementById("display").value = "";
}
