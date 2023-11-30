/**BANNER PUBLICITARIO DE LOGIN */
// async function obtenerRecurso(url, method) {
//   try {
//     const options = {
//       method: method,
//     };
//     const respuesta = await fetch(url, options);
//     if (!respuesta.ok) {
//       throw new Error(`Error al obtener el recurso: ${respuesta.status}`);
//     }
//     return await respuesta.json();
//   } catch (error) {
//     console.error(error);
//   }
// }

// // ...
// function loadBackgroundImages(url, banners, currentImageIndex) {
//   // Obtener la imagen de fondo del banner actual
//   const imagen = url+banners.data[currentImageIndex].src;

//   // Establecer la imagen de fondo del div
//   div.style.backgroundImage = `url(${imagen})`;
// }


// document.addEventListener('DOMContentLoaded', () => {
//   obtenerRecurso('login/publicidadBaner', "POST")
//     .then(respuesta => {
//       // Obtener los datos de los banners
//       const banners = respuesta;
//       // console.log( banners.url+banners.data[1].src);
      
      
//       // Cargar las imágenes de fondo al inicio de la página
//        loadBackgroundImages(respuesta.url, respuesta.data, 0);
       
//        // Establecer el intervalo para cambiar la imagen de fondo cada tres segundos
//        let currentImageIndex = 0; // Declarar currentImageIndex dentro del alcance de la función de devolución de llamada
//        setInterval(() => {
//          // Llamar a la función loadBackgroundImages() con los datos de los banners y el índice currentImageIndex
//          loadBackgroundImages(respuesta.url, respuesta.data, currentImageIndex);
       
//          // Actualizar el índice currentImageIndex para que la imagen de fondo cambie cada tres segundos
//          currentImageIndex = (currentImageIndex + 1) % respuesta.data.length;
//        }, 2000); // 3 segundos en milisegundos
//       })
//       .catch(error => {
//         // Manejar el error
//         console.error(error);
//       });
//     });
       




/**BANNER PUBLICITARIO DE LOGIN */
const imageUrls = [
  '/IAmed/resources/assets/img/login/publicidad_login_p1.png',
  '/IAmed/resources/assets/img/login/publicidad_login_p2.png',
  '/IAmed/resources/assets/img/login/publicidad_login_p4.png',
  '/IAmed/resources/assets/img/login/publicidad_login_p3.png',
];

const authRightElement = document.getElementById('auth-right');

let currentIndex = 0;

// Create a function to change the image
function changeImage() {
  // Increment the index or reset to 0 if it exceeds the length of imageUrls
  currentIndex = (currentIndex + 1) % imageUrls.length;

  // Get the next image URL
  const imageUrl = imageUrls[currentIndex];
  
  // Update the CSS property with the new image URL and gradient
  authRightElement.style.cssText = `background-image:  url(${imageUrl}); background-repeat: no-repeat; background-position: center center; background-size: cover;transition: background-image 1s ease-in-out;`;
}

// Set the timer
setInterval(changeImage, 8000);

// /**BANNER PUBLICITARIO DE LOGIN */
// async function obtenerRecurso(url, method) {
//   try {
//     const options = {
//       method: method,
//     };
//     const respuesta = await fetch(url, options);
//     if (!respuesta.ok) {
//       throw new Error(`Error al obtener el recurso: ${respuesta.status}`);
//     }
//     return await respuesta.json();
//   } catch (error) {
//     console.error(error);
//   }
// }

// document.addEventListener('DOMContentLoaded', () => {
//   obtenerRecurso('login/publicidadBaner', "POST")
//     .then(respuesta => {
//       // Obtener los datos de los banners
//       const banners = respuesta;
//       // console.log( banners.url+banners.data[1].src);
      
//       // Cargar las imágenes al inicio de la página
//       loadBackgroundImages(banners.url,banners.data, 0);
      
//       // Establecer el intervalo para cambiar la imagen de fondo cada tres segundos
//       let currentImageIndex = 0; // Declarar currentImageIndex dentro del alcance de la función de devolución de llamada
//       setInterval(() => {
//           loadBackgroundImages(url,banners,currentImageIndex); // Pasar banners y currentImageIndex
//           currentImageIndex = (currentImageIndex + 1) % banners.data.length;
//         }, 2000); // 3 segundos en milisegundos
//       })
//       .catch(error => {
//         // Manejar el error
//         console.error(error);
//       });
//     });
    
    
    
    
    
    
    const redirectUrl="";
/**ENVIO DEL FOMULARIO DEL LOGIN */
    async function formularioEnvio(link,formulario) {
        
        // const formularioElement = document.querySelector(`#${formulario}`);
        
        const button = document.querySelector(`#${formulario}`);
        button.addEventListener('submit', async (event) => {
            // Prevents the form from submitting
            event.preventDefault();
            const url = link;
            const method = "POST";
            const formData = new FormData(button);
            const fetchOptions = {
                method:"POST",
                body: formData,
                headers: {
                    // "Content-Type": "application/json",
                    "Authorization": "Bearer <token>",
          },
        };
            const response = await fetch(url, fetchOptions);
            
            const Data = await response.json();
            // console.log(Data)
            Toast.fire({
                icon: await Data.status,
                title: await Data.titulo,
                text: Data.msg,
                
            })
            redirectUrl= await Data.data.url
            // window.location.href = Data.data.retornar; 
    
        });
        return false;
    }