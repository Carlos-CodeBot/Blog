const comentarios = document.getElementById("comentarios");

function agregarComentario(nombre, comentario) {
  const li = document.createElement("li");
  li.innerHTML = `<strong>${nombre}:</strong> ${comentario}`;
  comentarios.appendChild(li);
}

const formComentario = document.querySelector("form:last-of-type");

formComentario.addEventListener("submit", (event) => {
  event.preventDefault();
  const nombre = event.target.elements.nombre.value;
  const comentario = event.target.elements.comentario.value;
  agregarComentario(nombre, comentario);
  event.target.reset();
});