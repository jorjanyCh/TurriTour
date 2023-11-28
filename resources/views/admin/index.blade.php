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
   <!-- Modal Editar -->
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
            @foreach($paquetes as $paquete)
                <tr>
                    <td>{{ $paquete->nombre }}</td>
                    <td>{{ $paquete->precio }}</td>
                    <td>{{ $paquete->descripcion }}</td>
                    <td>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editarModal{{$paquete->id}}">
                            Editar
                        </button>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminarModal{{$paquete->id}}">
                            Eliminar
                        </button>
                    </td>
                </tr>

                <!-- Modal Editar -->
              
<div class="modal fade" id="editarModal{{$paquete->id}}" tabindex="-1" role="dialog" aria-labelledby="editarModalLabel{{$paquete->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarModalLabel{{$paquete->id}}">Editar Paquete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.update', $paquete) }}" method="POST">
                    @csrf
                    @method('PUT') <!-- Utiliza el método PUT para actualizar -->
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" value="{{ $paquete->nombre }}" required>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio:</label>
                        <input type="number" class="form-control" name="precio" value="{{ $paquete->precio }}" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción:</label>
                        <textarea class="form-control" name="descripcion" rows="4" required>{{ $paquete->descripcion }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </form>
            </div>            
        </div>
    </div>
</div>


             <!-- Modal Eliminar -->
<div class="modal fade" id="eliminarModal{{$paquete->id}}" tabindex="-1" role="dialog" aria-labelledby="eliminarModalLabel{{$paquete->id}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="eliminarModalLabel{{$paquete->id}}">Eliminar Paquete</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Confirmación para eliminar el paquete -->
                <p>¿Estás seguro de que quieres eliminar el paquete "{{ $paquete->nombre }}"?</p>
                <form action="{{ route('admin.destroy', $paquete) }}" method="POST">
                    @csrf
                    @method('DELETE') <!-- Utiliza el método DELETE para eliminar -->

                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>




            @endforeach
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
                    <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                        
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
