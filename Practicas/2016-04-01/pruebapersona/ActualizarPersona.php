<!DOCTYPE html>
<?php
include_once './dal/Connection.php';
include_once './bll/PersonaBLL.php';
include_once './dto/Persona.php';

$id = $_REQUEST["id"];
$personaBLL = new PersonaBLL();
$objPersona = $personaBLL->selectById($id);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="MostrarPersonas.php" method="POST">
            <input type="hidden" value="<?php echo $objPersona->getId() ?>" name="id"/>
            <div>
                Nombres:
            </div> 
            <div>
                <input type="text" name="nombres" value="<?php echo $objPersona->getNombres() ?>"/>
            </div> 
            <div>
                Apellidos:
            </div> 
            <div>
                <input type="text" name="apellidos" value="<?php echo $objPersona->getApellidos() ?>"/>
            </div> 
            <div>
                Ciudad:
            </div> 
            <div>
                <input type="text" name="ciudad" value="<?php echo $objPersona->getCiudad() ?>"/>
            </div> 
            <div>
                Teléfono:
            </div> 
            <div>
                <input type="text" name="telefono" value="<?php echo $objPersona->getTelefono() ?>"/>
            </div> 
            <div>
                Edad:
            </div> 
            <div>
                <input type="text" name="edad" value="<?php echo $objPersona->getEdad() ?>"/>
            </div> 
            <div>
                <input type="submit" value="Guardar"/>
            </div>
            <input type="hidden" name="task" value="actualizar"/>
        </form>
    </body>
</html>
