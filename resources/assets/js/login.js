async function formularioEnvio() {
    
    const url = "<?= $utils->url('/login/entrar') ?>";
    const method = "GET";

    const fetchOptions = {
        method,
        headers: {
            "Content-Type": "application/json",
            "Authorization": "Bearer <token>",
  },
};

const response = await fetch(url, fetchOptions);

if (response.ok) {
    const Data = await response.json();
    console.console(Data);
} 
}