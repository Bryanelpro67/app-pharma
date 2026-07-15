<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Cliente</title>
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="glass-container">
        <div class="form-header">
            <div class="header-icon">
                <i class="fa-solid fa-user-gear"></i>
                <span>CLIENTE</span>
            </div>
            <div class="header-text">
                <h2>Registro de Cliente</h2>
                <p>Ingrese los detalles para crear un nuevo registro de cliente.</p>
            </div>
        </div>

        <form action="#" method="POST" onsubmit="event.preventDefault();">
            <div class="form-grid">
                <div class="form-column">
                    <div class="form-group">
                        <label for="codigo">Código del Cliente</label>
                        <div class="input-container">
                            <i class="fa-solid fa-id-card"></i>
                            <input type="text" id="codigo" value="CL0001" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nombre">Nombre Completo</label>
                        <div class="input-container">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" id="nombre" value="Ana Maria Garcia" placeholder="Nombre completo">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="direccion">Dirección Completa</label>
                        <div class="input-container textarea-container">
                            <i class="fa-solid fa-map-pin"></i>
                            <textarea id="direccion" rows="4">Av. Las Camelias, No. 123</textarea>
                        </div>
                    </div>
                </div>

                <div class="form-column">
                    <div class="form-group">
                        <label for="telefono">Teléfono de Contacto</label>
                        <div class="input-container">
                            <i class="fa-solid fa-phone"></i>
                            <input type="text" id="telefono" value="+503 7123 4567" placeholder="+503 7123 4567">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="municipio">Municipio</label>
                        <div class="input-container select-container">
                            <i class="fa-solid fa-location-dot"></i>
                            <select id="municipio">
                                <option value="">Seleccionar Municipio...</option>
                                <option value="1" selected>San Salvador</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="distrito">Distrito</label>
                        <div class="input-container select-container">
                            <i class="fa-solid fa-map"></i>
                            <select id="distrito">
                                <option value="">Seleccionar Distrito...</option>
                                <option value="1" selected>Distrito 1</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="departamento">Departamento</label>
                        <div class="input-container select-container">
                            <i class="fa-solid fa-building"></i>
                            <select id="departamento">
                                <option value="">Seleccionar Departamento...</option>
                                <option value="1" selected>San Salvador</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-save">
                    Guardar Registro <i class="fa-solid fa-floppy-disk"></i>
                </button>
                <button type="button" class="btn btn-cancel">Cancelar</button>
            </div>
        </form>
    </div>
</body>
</html>