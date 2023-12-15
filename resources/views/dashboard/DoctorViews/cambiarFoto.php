<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cambiar Foto de Perfil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Agrega más estilos personalizados aquí si es necesario -->
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h2>Mi Perfil</h2>
        </div>
        <div class="card-body text-center">
            <img id="profileImage" src="default-profile-image.jpg" alt="Foto de Perfil" class="img-fluid mb-3">
            <label for="imageInput" class="btn btn-primary btn-lg">
                <i class="fas fa-camera"></i> Cambiar Foto
            </label>
            <input type="file" id="imageInput" accept="image/*" style="display: none;">
        </div>
    </div>
</div>

<!-- Bootstrap y Font Awesome (Iconos) -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Scripts de Bootstrap (jQuery y Popper.js son necesarios para algunos componentes de Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    document.getElementById('imageInput').addEventListener('change', function (event) {
        const fileInput = event.target;
        const file = fileInput.files[0];

        if (file) {
            const reader = new FileReader();

            reader.onload = function (e) {
                document.getElementById('profileImage').src = e.target.result;
            };

            reader.readAsDataURL(file);
        }
    });
</script>

</body>
</html>
