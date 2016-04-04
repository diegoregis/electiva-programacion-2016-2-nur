<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once './dal/Connection.php';
        include_once './bll/PersonaBLL.php';
        include_once './dto/Persona.php';

        $personaBLL = new PersonaBLL();
        $task = "mostrar";
        if (isset($_REQUEST["task"])) {
            $task = $_REQUEST["task"];
        }

        switch ($task) {
            case "insertar":
                $nombres = $_REQUEST["nombres"];
                $apellidos = $_REQUEST["apellidos"];
                $ciudad = $_REQUEST["ciudad"];
                $telefono = $_REQUEST["telefono"];
                $edad = $_REQUEST["edad"];

                $personaBLL->insert($nombres, $apellidos, $ciudad, $telefono, $edad);
                break;
            case "actualizar":
                $id = $_REQUEST["id"];
                $nombres = $_REQUEST["nombres"];
                $apellidos = $_REQUEST["apellidos"];
                $ciudad = $_REQUEST["ciudad"];
                $telefono = $_REQUEST["telefono"];
                $edad = $_REQUEST["edad"];
                $personaBLL->update($id, $nombres, $apellidos, $ciudad, $telefono, $edad);
                break;
            case "eliminar":
                $id = $_REQUEST["id"];
                $personaBLL->delete($id);
                break;
        }


        $listaPersonas = $personaBLL->selectAll();
        ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Ciudad</th>
                    <th>Telefono</th>
                    <th>Edad</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listaPersonas as $objPersona) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $objPersona->getId(); ?>
                        </td>
                        <td><?php echo $objPersona->getNombres(); ?></td>
                        <td><?php echo $objPersona->getApellidos(); ?></td>
                        <td><?php echo $objPersona->getCiudad(); ?></td>
                        <td><?php echo $objPersona->getTelefono(); ?></td>
                        <td><?php echo $objPersona->getEdad(); ?></td>
                        <td><a href="ActualizarPersona.php?id=<?php echo $objPersona->getId() ?>">Actualizar</a></td>
                        <td><a href="MostrarPersonas.php?id=<?php echo $objPersona->getId() ?>&task=eliminar">Eliminar</a></td>
                    </tr>
                    <?php
                }
                ?>

            </tbody>
        </table>
        <div>
            <a href="InsertarPersona.php">
                Insertar Persona
            </a>
        </div>
    </body>
</html>
