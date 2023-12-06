// // Obtenemos el span con el atributo data-bs-id
// var span = document.querySelector("span[data-bs-id]");
// // Asignamos un manejador de eventos al clic
// span.addEventListener("click", function() {
//   var id = span.dataset.bsId;
//   var texto = span.dataset.bsNota;
//   var direccion = span.dataset.bsUrl;
//   const motivo = document.getElementById("motivo");
//   motivo.textContent = texto;
//   // Mostramos el valor
// //   alert(url+"/"+id);

// // Define la URL de la solicitud
// const url = direccion+"/"+id;
// // Realiza la solicitud
// const data = await fetchData(url);
// console.log(data);

// });


// async function fetchData(url) {
//     try {
//       const response = await fetch(url);
//       const data = await response.json();
//     } catch (error) {
//       console.error(error);
//     }
//   }


// Obtenemos el span con el atributo data-bs-id
var span = document.querySelector("span[data-bs-id]");
// Asignamos un manejador de eventos al clic
span.addEventListener("click", async function() {
  var id = span.dataset.bsId;
  var texto = span.dataset.bsNota;
  var direccion = span.dataset.bsUrl;
  const motivo = document.getElementById("motivo");
  motivo.textContent = texto;
  // Mostramos el valor
//   alert(direccion+"/"+id);

  // Define la URL de la solicitud
  const url = direccion+"/"+id;
  // Realiza la solicitud
  const data = await fetchData(url);
//   console.log(data);
document.getElementById("nomPaciente").textContent=data.data.datos[0].nombre +" "+ data.data.datos[0].apellidos;
document.getElementById("PacienteInf").innerHTML="<b>UBICACION: </b>"+data.data.datos[0].ubicacion +" "+"<br><b>SEXO:</b> "+ data.data.datos[0].sexo;
//   console.log(data.data.datos[0].user);


});


async function fetchData(url) {
  try {
    const response = await fetch(url);
     const data = await response.json();
     return data
  } catch (error) {
    console.error(error);
  }
}

  