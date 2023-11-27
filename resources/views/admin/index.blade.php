<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administración de Paquetes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Estilos personalizados */
        body {
            background-color: #f8f9fa;
        }
        .admin-container {
            max-width: 800px;
            margin: 30px auto;
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        .paquete-form {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="admin-container">
    <h2 class="mb-4">Administración de Paquetes</h2>

    <!-- Botón para abrir el modal de crear nuevo paquete -->
    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#nuevoPaqueteModal">
        Crear Nuevo Paquete
    </button>

    <!-- Tabla para editar y eliminar paquetes -->
    <div>
        <h4>Lista de Paquetes</h4>
        <table class="table">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            <!-- Datos de ejemplo -->
            <tr>
                <td>Nombre del paquete 1</td>
                <td>$100</td>
                <td>Descripción del paquete 1</td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editarModal">
                        Editar
                    </button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminarModal">
                        Eliminar
                    </button>
                </td>
            </tr>
            <!-- Puedes repetir esta estructura para mostrar más paquetes -->
            </tbody>
        </table>
    </div>

    <!-- Modal para crear nuevo paquete -->
    <div class="modal fade" id="nuevoPaqueteModal" tabindex="-1" role="dialog" aria-labelledby="nuevoPaqueteModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="nuevoPaqueteModalLabel">Crear Nuevo Paquete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/guardar-paquete" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio:</label>
                            <input type="number" class="form-control" id="precio" name="precio">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción:</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="imagenes">Cargar Imágenes:</label>
                            <input type="file" class="form-control-file" id="imagenes" name="imagenes[]" multiple>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modales de editar y eliminar (mantenidos como en el ejemplo anterior) -->
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Script para abrir el modal al hacer clic en el botón "Crear Nuevo Paquete"
    $(document).ready(function() {
        $('#crearNuevoPaqueteBtn').on('click', function() {
            $('#nuevoPaqueteModal').modal('show');
        });
    });
</script>

</body>
</html>
