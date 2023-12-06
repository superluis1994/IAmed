<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Referidos Médicos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .doctor-button {
            cursor: pointer;
        }

        .doctor-button:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h2>Referir a Médico</h2>
        </div>
        <div class="card-body">
            <h5 class="card-title">Selecciona la Especialidad del Médico</h5>
            <div class="btn-group" role="group" aria-label="Especialidades">
                <button type="button" class="btn btn-light doctor-button" onclick="seleccionarEspecialidad('Medicina General')">Medicina General</button>
                <button type="button" class="btn btn-light doctor-button" onclick="seleccionarEspecialidad('Cardiología')">Cardiología</button>
                <button type="button" class="btn btn-light doctor-button" onclick="seleccionarEspecialidad('Gastroenterología')">Gastroenterología</button>
                <button type="button" class="btn btn-light doctor-button" onclick="seleccionarEspecialidad('Dermatología')">Dermatología</button>
            </div>

            <div class="mt-4">
                <h5 class="card-title">Médicos Disponibles</h5>
                <ul class="list-group" id="medicosDisponibles">
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap y Font Awesome (Iconos) -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script>
    function seleccionarEspecialidad(especialidad) {
        var medicos = obtenerMedicosPorEspecialidad(especialidad);

        var listaMedicos = document.getElementById('medicosDisponibles');
        listaMedicos.innerHTML = '';

        medicos.forEach(function (medico) {
            var listItem = document.createElement('li');
            listItem.className = 'list-group-item';
            listItem.innerHTML = '<strong>Médico:</strong> ' + medico.nombre + '<br><strong>Especialidad:</strong> ' + medico.especialidad;
            listaMedicos.appendChild(listItem);
        });
    }

    function obtenerMedicosPorEspecialidad(especialidad) {
        var medicos = [];

        switch (especialidad) {
            case 'Medicina General':
                medicos.push({ nombre: 'Dr. Juan Pérez', especialidad: 'Medicina General' });
                medicos.push({ nombre: 'Dra. María García', especialidad: 'Medicina General' });
                break;
            case 'Cardiología':
                medicos.push({ nombre: 'Dr. Carlos Martínez', especialidad: 'Cardiología' });
                medicos.push({ nombre: 'Dra. Laura Fernández', especialidad: 'Cardiología' });
                break;
            case 'Gastroenterología':
                medicos.push({ nombre: 'Dr. Andrés López', especialidad: 'Gastroenterología' });
                medicos.push({ nombre: 'Dra. Ana Gómez', especialidad: 'Gastroenterología' });
                break;
            case 'Dermatología':
                medicos.push({ nombre: 'Dr. Luis Pérez', especialidad: 'Dermatología' });
                medicos.push({ nombre: 'Dra. Marta González', especialidad: 'Dermatología' });
                break;
        }

        return medicos;
    }
</script>

</body>
</html>
