var id = 0;


function addToTheList() {
  var tabl = document.querySelector("table");

  var nameData = document.getElementById("nameData").value;
  var surnameData = document.getElementById("surnameData").value;

  var emptyInputError = document.getElementById("result");

  var newTr = document.createElement("tr");
  tabl.appendChild(newTr);
  newTr.classList.add("newTr");

  var newId = document.createElement("td");
  var newTdName = document.createElement("td");
  var newTdSurame = document.createElement("td");

  newTr.appendChild(newId);
  newTr.appendChild(newTdName);
  newTr.appendChild(newTdSurame);

  newTdName.classList.add("newTd");
  newId.classList.add("newId");
  newTdSurame.classList.add("newTd");

  id++;

  newId.innerText = id;
  newTdName.innerText = nameData;
  newTdSurame.innerText = surnameData;

  document.getElementById("nameData").value = "";
  document.getElementById("surnameData").value = "";
}
