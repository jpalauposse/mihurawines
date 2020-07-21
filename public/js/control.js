EdadOk = sessionStorage.getItem("control");

if (EdadOk === null || EdadOk === "[]") {

sessionStorage.setItem("control", "[]");

function producto(id) {
  this.id = id;
};
// Get the modal
var modal = document.getElementById("miModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("cerrar")[0];

// When the user clicks the button, open the modal 
function mostrar() {
  modal.style.display = "block";
}
mostrar();

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
  var seleccion = sessionStorage.getItem("control")
      seleccion = JSON.parse(seleccion)
      var id = "X";
      var selecc = new producto(id)
      seleccion[seleccion.length] = selecc;
      seleccion = JSON.stringify(seleccion);
      sessionStorage.setItem("control", seleccion);
}
};


