

/**BANNER PUBLICITARIO DE LOGIN */
const imageUrls = [
  '/IAmed/resources/assets/img/login/team-3.jpg',
  '/IAmed/resources/assets/img/login/team-5.jpg',
  '/IAmed/resources/assets/img/login/team-2.jpg',
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
  authRightElement.style.cssText = `background-image:  url(${imageUrl}); background-repeat: no-repeat; background-position: center center; background-size: cover;`;
}

// Set the timer
setInterval(changeImage, 5000);

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
//       console.log(banners);
      
//       // // Cargar las imágenes al inicio de la página
//       // loadBackgroundImages(banners, 0);
      
//       // // Establecer el intervalo para cambiar la imagen de fondo cada tres segundos
//       // let currentImageIndex = 0; // Declarar currentImageIndex dentro del alcance de la función de devolución de llamada
//       // setInterval(() => {
//         //   loadBackgroundImages(banners, currentImageIndex); // Pasar banners y currentImageIndex
//         //   currentImageIndex = (currentImageIndex + 1) % banners.data.length;
//         // }, 2000); // 3 segundos en milisegundos
//       })
//       .catch(error => {
//         // Manejar el error
//         console.error(error);
//       });
//     });
    
    
    
    
    
    
    const redirectUrl="";
    
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