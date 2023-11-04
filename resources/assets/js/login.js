
// async function formularioEnvio(link) {
    
//     const url = link;
//     const method = "GET";

//     const fetchOptions = {
//         method,
//         headers: {
//             "Content-Type": "application/json",
//             "Authorization": "Bearer <token>",
//   },
// };

// const response = await fetch(url, fetchOptions);
// const Data = await response.json();
// console.log(Data);

// // if (response.ok) {
// // } 
// }
// // formularioEnvio();


async function formularioEnvio(link,formulario) {
    
    // const formularioElement = document.querySelector(`#${formulario}`);
    
    const button = document.querySelector(`#${formulario}`);
    button.addEventListener('submit', async (event) => {
        // Prevents the form from submitting
        event.preventDefault();
        const url = link;
        const method = "POST";
        const formData = new FormData(button);
            //   formData.append("user","sorto")
        // console.log(button)
    
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
        Toast.fire({
            icon: 'error',
            title: 'Error',
            text: 'Usuario o contraseña incorrectos',
            // Almacena la URL de destino en una variable
            redirectUrl: 'wwww.youtube.com',
          })
        // window.location.href = Data.data.retornar; 

    });
    return false;
}