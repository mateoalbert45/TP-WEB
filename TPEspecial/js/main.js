'use strict'
let url = "api/comentario/";

let templateComentarios;


document.addEventListener('DOMContentLoaded', cargarcomentarios);



function cargarcomentarios(){
fetch('js/templates/comentarios.handlebars')
.then(response => response.text())
.then(template => {
  templateComentarios = Handlebars.compile(template);
  getComentarios()
  })

}


function insertarComentarios(){
  let texto = document.querySelector("#texto").value;
  let calificacion = document.querySelector("#calificacion").value;
  let id = document.querySelector("#idProducto").value;
  console.log(texto);
  console.log(calificacion);
  let comentario=
  {
  "texto": texto,
  "calificacion": calificacion
}
  fetch("api/comentario/"+id,{
    'method': 'POST',
    'headers': {'content-type': 'application/json'},
    'body': JSON.stringify(comentario)
  })
}

function activarbotones(){
  let botoncrearcomentario = document.querySelectorAll("#insertarComentario");
  botoncrearcomentario.forEach(e=> e.addEventListener("click", insertarComentarios));

  let botonborrarcomentario = document.querySelectorAll(".borrarcomentario");
  botonborrarcomentario.forEach(e=> e.addEventListener("click", function(){borrarcomentario(e.getAttribute("value"))}));
}




function getComentarios(){
  let id = document.querySelector("#idProducto").value;
  fetch(url + "/" + id)
  .then(response => response.json())
  .then(jsonComentarios => {
    mostrarComentarios(jsonComentarios);
    console.log(jsonComentarios);
    activarbotones();
  })

}

function mostrarComentarios(jsonComentarios){
let boolean = verificarboolean(document.querySelector("#admin").getAttribute("value"));

let context = {
  comentarios : jsonComentarios,
  admin : boolean
}
let html = templateComentarios(context);
document.querySelector("#comentarios-container").innerHTML = html;
}


function verificarboolean(boolean){
  if (boolean=="true") {
    boolean=true
return boolean
  }else {
    boolean=false
    return boolean
  }
}

function borrarcomentario(id){
  fetch(url + "/" + id, {
    method: 'DELETE',
    headers: {
      'Content-Type':'application/json'
    }
}).then(r=>{
  console.log(r);
  cargarcomentarios();
})
}
