/**ENVIO DEL FOMULARIO ADD RECORDATORIO */
// const redirectUrl="";
async function formularioEnvio(link,formulario) { 
    const button = document.querySelector(`#${formulario}`);
    button.addEventListener('submit', async (event) => {
        // Prevents the form from submitting
        event.preventDefault();
        const url = link;
        const method = "POST";
        const formData = new FormData(button);
        const fetchOptions = {
            method:method,
            body: formData,
            headers: {
                // "Content-Type": "application/json",
                "Authorization": "Bearer <token>",
      },
    };
        const response = await fetch(url, fetchOptions);
        
        const Data = await response.json();
        console.log(Data)
        Toast.fire({
            icon: await Data.status,
            title: await Data.titulo,
            text: Data.msg,
            
        })
        // redirectUrl= ""
        // window.location.href = Data.data.retornar; 

    });
    return false;
}