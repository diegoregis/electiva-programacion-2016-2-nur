<?php
$id = $_POST["id"];
$nombres = $_POST["nombres"];
$ciudad = $_POST["ciudad"];
$apellidos = $_POST["apellidos"];
$telefono = $_POST["telefono"];

include_once './Persona.php';

$objPersona = new Persona($id, $nombres, $apellidos, $ciudad, $telefono);
?>
<html>
    <head>
        <title>Persona</title>
    </head>
    <body>
        <div>
            Id:
        </div>
        <div>
            <?php
            echo $objPersona->getId();
            ?>
        </div>
        <div>
            Nombres:
        </div>
        <div>
            <?php
            echo $objPersona->getNombres();
            ?>
        </div>
        <div>
            Apellidos:
        </div>
        <div>
            <?php
            echo $objPersona->getApellidos();
            ?>
        </div>
        <div>
            Ciudad:
        </div>
        <div>
            <?php
            echo $objPersona->getCiudad();
            ?>
        </div>
        <div>
            Teléfono:
        </div>
        <div>
            <?php
            echo $objPersona->getTelefono();
            ?>
        </div>
    </body>
</html>


