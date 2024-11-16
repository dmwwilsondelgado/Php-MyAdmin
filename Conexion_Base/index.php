<?php
require('conexion.php');

$db = new Conexion(); // se instancia el objetop
$conexion = $db->getConexion();

$sql ="SELECT * FROM ciudades";
$banedera = $conexion->prepare($sql);
$banedera->execute();
$ciudades =$banedera->fetchALL();
?>

<form action=""  method="post">
    <div>
        <label for="ciudad_id">Ciudad</label>
        <select name="ciudad_id" id="ciudad_id">
            <?php 
            foreach($ciudades as $key => $value){
            ?>  
            <option id="<?=$value['id']?>">
                <?=$value['nombre']?>
            </option>
            <?php  
            }
            ?>
        </select>
    </div>
</form>




