<?php

/**
 * Description of PersonaBLL
 *
 * @author jmacb
 */
class PersonaBLL {

    public function selectAll() {
        $listaPersonas = array();
        $objConexion = new Connection();
        $res = $objConexion->query("
            SELECT id,
                    nombres,
                    apellidos,
                    ciudad,
                    telefono,
                    edad
            FROM Persona");
        
        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            
            $persona = $this->rowToDto($row);
            $listaPersonas[] = $persona;
        }
        return $listaPersonas;
    }

    private function rowToDto($row) {
        
        $persona = new Persona();
        $persona->setId($row["id"]);
        $persona->setNombres($row["nombres"]);
        $persona->setApellidos($row["apellidos"]);
        $persona->setCiudad($row["ciudad"]);
        $persona->setTelefono($row["telefono"]);
        $persona->setEdad($row["edad"]);
        return $persona;
    }

    public function selectById($id) {
        $objConexion = new Connection();
        $res = $objConexion->queryWithParams("
            SELECT id,
                    nombres,
                    apellidos,
                    ciudad,
                    telefono,
                    edad
            FROM Persona
            WHERE id = :idParametro", array(":idParametro" => $id));
        $row = $res->fetch(PDO::FETCH_ASSOC);
        if ($row == null) {
            return null;
        }
        $persona = $this->rowToDto($row);
        return $persona;
    }

    public function insert($nombres, $apellidos, $ciudad, $telefono, $edad) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("
                INSERT INTO Persona(nombres, apellidos, ciudad, telefono, edad)
                VALUES (:nombresParam, :apellidosParam, :ciudadParam, :telefonoParam, :edadParam)", array(
            ":nombresParam" => $nombres,
            ":apellidosParam" => $apellidos,
            ":ciudadParam" => $ciudad,
            ":telefonoParam" => $telefono,
            ":edadParam" => $edad
        ));
    }

    public function update($id, $nombres, $apellidos, $ciudad, $telefono, $edad) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("
                UPDATE Persona
                SET nombres = :nombresParam,
                apellidos = :apellidosParam,
                ciudad = :ciudadParam,
                telefono = :telefonoParam,
                edad = :edadParam
                WHERE id = :idParam", array(
            ":nombresParam" => $nombres,
            ":apellidosParam" => $apellidos,
            ":ciudadParam" => $ciudad,
            ":telefonoParam" => $telefono,
            ":edadParam" => $edad,
            ":idParam" => $id
        ));
    }

    public function delete($id) {
        $objConexion = new Connection();
        $objConexion->queryWithParams("
                DELETE FROM Persona
                WHERE id = :idParam", array(
            ":idParam" => $id
        ));
    }

}
