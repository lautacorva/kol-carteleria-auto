function opcion0() {
  let varx = document.getElementsByClassName("varx");
  for (var i = 0; i < varx.length; i++) {
    varx[i].innerHTML = "x";
  }
  const box = document.getElementById("wrapper");
  box.classList.remove("opcion0");
  box.classList.remove("opcion1");
  box.classList.remove("opcion2");
  box.classList.remove("opcion3");
  box.classList.remove("opcionglassplano");
  box.classList.remove("opcionglasscomp");
  box.classList.add("opcion0");
}

function opcion1() {
  let varx = document.getElementsByClassName("varx");
  for (var i = 0; i < varx.length; i++) {
    varx[i].innerHTML = "";
  }
  const box = document.getElementById("wrapper");
  box.classList.remove("opcion0");
  box.classList.remove("opcion1");
  box.classList.remove("opcion2");
  box.classList.remove("opcion3");
  box.classList.remove("opcionglassplano");
  box.classList.remove("opcionglasscomp");
  box.classList.add("opcion1");
}

function opcion2() {
  let varx = document.getElementsByClassName("varx");
  for (var i = 0; i < varx.length; i++) {
    varx[i].innerHTML = "";
  }
  const box = document.getElementById("wrapper");
  box.classList.remove("opcion0");
  box.classList.remove("opcion1");
  box.classList.remove("opcion2");
  box.classList.remove("opcion3");
  box.classList.remove("opcionglassplano");
  box.classList.remove("opcionglasscomp");
  box.classList.add("opcion2");
}

function opcion3() {
  let varx = document.getElementsByClassName("varx");
  for (var i = 0; i < varx.length; i++) {
    varx[i].innerHTML = "";
  }
  const box = document.getElementById("wrapper");
  box.classList.remove("opcion0");
  box.classList.remove("opcion1");
  box.classList.remove("opcion2");
  box.classList.remove("opcion3");
  box.classList.remove("opcionglassplano");
  box.classList.remove("opcionglasscomp");
  box.classList.add("opcion3");
}

function opcionglassplano() {
   let varx = document.getElementsByClassName("varx");
   for (var i = 0; i < varx.length; i++) {
     varx[i].innerHTML = "";
   }
   const box = document.getElementById("wrapper");
   box.classList.remove("opcion0");
   box.classList.remove("opcion1");
   box.classList.remove("opcion2");
   box.classList.remove("opcion3");
   box.classList.remove("opcionglasscomp");
   box.classList.add("opcionglassplano");
}

function opcionglasscomp() {
  let varx = document.getElementsByClassName("varx");
  for (var i = 0; i < varx.length; i++) {
    varx[i].innerHTML = "";
  }
  const box = document.getElementById("wrapper");
  box.classList.remove("opcion0");
  box.classList.remove("opcion1");
  box.classList.remove("opcion2");
  box.classList.remove("opcion3");
  box.classList.remove("opcionglassplano");
  box.classList.add("opcionglasscomp");
}

function borrar(e) {
  e.parentElement.parentElement.remove();
}

function agregarPrecio() {
  var x = document.getElementById("addprecio").value;
  const ul = document.getElementById("precios-ul");
  const li = document.createElement("li");
  li.innerHTML =
    `<div id="acciones"><div onclick="borrar(this)" class="no-print" id="borrar"><i class="fa fa-trash" aria-hidden="true"></i></div><div onclick="duplicar(this)" class="no-print" id="duplicar"><i class="fa fa-files-o" aria-hidden="true"></i></div></div><img src="https://kolaccesorios.com/wp-content/uploads/2022/04/Logo.png" title="logo" class="img-logo"><strong>` +
    x +
    `</strong>`;
  ul.appendChild(li);
}

function duplicar(e) {
  const box = e.parentElement.parentElement;
  let clonedMenu = box.cloneNode(true);
  box.parentNode.insertBefore(clonedMenu, box.nextSibling);
}
