<?php
require_once("conexion.php");

if (isset($_POST['btn-registrar'])) {
    $documento = $_POST['documento'];
    $tipoDocumento = $_POST['tipoDocumento'];
    $primer_nombre = $_POST['primerNombre'];
    $segundo_nombre = $_POST['segundoNombre'];
    $primer_apellido = $_POST['primerApellido'];
    $segundo_apellido = $_POST['segundoApellido'];
    $fecha_nacimiento = $_POST['fechaNacimiento'];
    $sexo = $_POST['sexo'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $tipoUsuario = $_POST['rol'];
    $estado = "claro";

    $nombre_imagen = $_FILES['foto']['name'];
    $temporal = $_FILES['foto']['tmp_name'];
    $carpeta = '../img/fotosUsuarios';
    $ruta = $carpeta . '/' . $nombre_imagen;
    move_uploaded_file($temporal, $carpeta . '/' . $nombre_imagen);

    $insertarUsuario = mysqli_query($conexion, 
            "INSERT INTO `usuario` (`Documento`, `TipoDocumento`, `PrimerNombre`, `SegundoNombre`, 
                `PrimerApellido`, `SegundoApellido`, `FechaNacimiento`, `Sexo`, `Telefono`, `Direccion`, `Foto`, `Estado`)
                VALUES ('$documento', '$tipoDocumento', '$primer_nombre', '$segundo_nombre', '$primer_apellido', 
                    '$segundo_apellido', '$fecha_nacimiento', '$sexo', '$telefono', '$direccion', '$ruta','$estado')");

    if ($tipoUsuario == "docente") {
        ?>
            <div class="docente">
                <div class="titulo">
                    Docente
                </div>
                <form action="dashboard.php?mod=tipoUsuario" method="post" class="ui form">
                    <div class="two fields">
                        <div class="field">
                            <label for="JornadaDocente">Jornada</label>
                            <select name="jornadaD" id="jornadaDocente">
                                <option>Seleccione</option>
                                <option value="mañana">Mañana</option>
                                <option value="tarde">Tarde</option>
                            </select>
                        </div>
                        <div class="field">
                            <label for="">Especializacion</label>
                            <input type="text" name="especializacion" id="">
                        </div>
                    </div>
                    <div class="two fields">
                        <div class="field">
                            <label for="">Correo</label>
                            <input type="email" name="correo" id="">
                        </div>
                        <div class="field">
                            <label for="">Clave</label>
                            <input type="password" name="clave" id="">
                        </div>
                    </div>
                    <input type="hidden" name="documento" value="<?php echo  $documento;?>">
                    <button type="submit" name="btn-registroDocente" class="continuar extendido">Registrar usuario</button>
                </form>
            </div>
        <?php
    }else if ($tipoUsuario == "administrador"){
        ?>
            <div class="administrador">
                <div class="titulo">
                    Administrador
                </div>
                <form action="dashboard.php?mod=tipoUsuario" method="post" class="ui form">
                    <div class="field">
                        <label for="">Cargo</label>
                        <input type="text" name="cargo">
                    </div>
                    <div class="two fields">
                        <div class="field">
                            <label for="">Correo</label>
                            <input type="text" name="correo">
                        </div>
                        <div class="field">
                            <label for="">Clave</label>
                            <input type="text" name="clave">
                        </div>
                    </div>
                    <input type="hidden" name="documento" value="<?php echo  $documento;?>">
                    <button type="submit" name="btn-registroAdministrador" class="continuar extendido">Registrar usuario</button>
                </form>
            </div>
        <?php
    }else if ($tipoUsuario == "estudiante"){
        ?>
            <div class="estudiante">
                <div class="titulo">
                Estudiante
                </div>
                <form action="dashboard.php?mod=tipoUsuario" method="post" class="ui form">
                    <div class="two fields">
                        <div class="field">
                        <label for="">Grado</label>
                        <select name="grado" id="grado">
                            <option>Seleccione</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                        </select>
                        </div>
                        <div class="field">
                        <label for="">Grupo</label>
                        <select name="grupo" id="grupo">
                            <option>Seleccione</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                        </div>
                    </div>
                    <div class="two fields">
                        <div class="field">
                        <label for="">Correo</label>
                        <input type="text" name="correoEstu">
                        </div>
                        <div class="field">
                        <label for="">Clave</label>
                        <input type="text" name="clave">
                        </div>
                    </div>
                    <div class="three fields">
                        <div class="field">
                            <label for="">Documento Acudiente</label>
                            <input type="number" name="documentoAcu" id="">
                        </div>
                        <div class="field">
                            <label for="">Nombre acudiente</label>
                            <input type="text" name="nombresAcu" id="">
                        </div>
                        <div class="field">
                            <label for="">Apellido acudiente</label>
                            <input type="text" name="apellidosAcu" id="">
                        </div>
                        
                    </div>
                    <div class="three fields">
                        <div class="field">
                            <label for="">Telefono</label>
                            <input type="number" name="telefono" id="">
                        </div>
                        <div class="field">
                            <label for="">Correo</label>
                            <input type="email" name="correoAcu" id="">
                        </div>
                        <div class="field">
                            <label for="">Parentesco</label>
                            <select name="parentesco" id="parentesco">
                                <option>Seleccione</option>
                                <option value="padre">Padre</option>
                                <option value="madre">Madre</option>
                                <option value="acudiente">Acudiente</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="documento" value="<?php echo  $documento;?>">
                    <button type="submit" name="btn-registroEstudiante" class="continuar extendido estu">Registrar usuario</button>
                </form>
            </div>
        <?php
    }

}
?>