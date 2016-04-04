<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="MostrarPersonas.php" method="POST">
            <div>
                Nombres:
            </div> 
            <div>
                <input type="text" name="nombres"/>
            </div> 
            <div>
                Apellidos:
            </div> 
            <div>
                <input type="text" name="apellidos"/>
            </div> 
            <div>
                Ciudad:
            </div> 
            <div>
                <input type="text" name="ciudad"/>
            </div> 
            <div>
                Teléfono:
            </div> 
            <div>
                <input type="text" name="telefono"/>
            </div> 
            <div>
                Edad:
            </div> 
            <div>
                <input type="text" name="edad"/>
            </div> 
            <div>
                <input type="submit" value="Insertar"/>
            </div>
            <input type="hidden" name="task" value="insertar"/>
        </form>
    </body>
</html>
