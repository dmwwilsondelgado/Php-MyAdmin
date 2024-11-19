<?php
require('conexion.php');

$db = new Conexion(); // se instancia el objeto
$conexion = $db->getConexion();

$sql = "SELECT * FROM ciudades";
$banedera = $conexion->prepare($sql);
$banedera->execute();
$ciudades =$banedera->fetchALL();


$sql = "SELECT * FROM generos";
$banedera = $conexion->prepare($sql);
$banedera->execute();
$generos =$banedera->fetchALL();
?>

<!-- controlador.php -->
<form action="controlador.php" method="post">
    <fieldset>
        <legend>Conexion PHP a MySQL</legend>
        <div>
            <label for="nombre">Nombres</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre">
        </div>
        <div>
            <label for="apellido">Apelligido</label>
            <input type="text" id="apellido" name="apellido" placeholder="Apellido">
        </div>
        <div>
            <label for="correo">Correo</label>
            <input type="text" id="correo" name="correo" placeholder="Correo">
        </div>
        <div>
            <label for="fecha_nacimiento">Fecha Nacimiento</label>
            <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Fecha">
        </div>

        <div>
            <label for="id_ciudad">Ciudades</label>
            <select name="id_ciudad" id="id_ciudad">
                <?php
                foreach ($ciudades as $key => $value) {
                ?>
                <option id="<?=$value['id_ciudad']?>">
                    <?= $value['nombre_ciudad'] ?>
                </option>
                <?php
                }
                ?>
            </select>
        </div>

        <div>
            <?php
             foreach ($generos as $key => $value){
            ?>
                <div>
                    <label for="genero<?=$value['id_genero']?>"><?= $value['genero'] ?>
                        <input type="radio" name="id_genero" value="<?$value['id_genero']?>" id="genero<?=$value['id_genero']?>">
                    </label>
                </div>
            <?php
            }
            ?>
        </div>

        <div>
            <label for="id_genero">Generos</label>
            <select name="id_genero" id="id_genero">
                <?php
                foreach ($generos as $key => $value) {
                ?>
                <option id="<?=$value['id_genero']?>">
                    <?= $value['genero'] ?>
                </option>
                <?php
                }
                ?>
            </select>
        </div>
        <br>
        <button>Guardar Datos</button>
    </fieldset>
</form>