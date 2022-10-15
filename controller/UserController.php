<?php
class UserController
{

    var $objUser;

    public function __construct(User $objUser)
    {
        $this->objUser = $objUser;
    }

    public function create()
    {
        $userCode = $this->objUser->getUserCode();
        $userUser = $this->objUser->getUserUser();
        $userPassword = $this->objUser->getUserPassword();
        $userEmail = $this->objUser->getUserEmail();
        $idRoles = $this->objUser->getIdRoles();
        $query = "INSERT INTO usuarios (Usuario, Contrasena, Correo, Idroles) VALUES ('$userUser', '$userPassword', '$userEmail', $idRoles)";
        echo($userUser);
        $objUserController = new ConnectionController();
        $objUserController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objUserController->runCommandSQL($query);
        $objUserController->closeDataBase();
    }

    public function readAll()
    {
        $query = "SELECT * FROM usuarios";
        $objUserController = new ConnectionController();
        $objUserController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $res = $objUserController->runSelect($query);
        $row = $res->fetch_all(MYSQLI_ASSOC);
        $objUserController->closeDataBase();
        return $row;
    }

    public function read()
    {
        $userCode = $this->objUser->getUserCode();
        $query = "SELECT Idusuarios, Usuario, Contrasena, Correo, Idroles FROM usuarios WHERE Idusuarios ='$userCode'";
        $objUserController = new ConnectionController();
        $objUserController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $res = $objUserController->runSelect($query);
        $row = $res->fetch_all(MYSQLI_ASSOC);
        $objUserController->closeDataBase();
        return $row;
    }

    public function update()
    {
        $userCode = $this->objUser->getUserCode();
        $userUser = $this->objUser->getUserUser();
        $userPassword = $this->objUser->getUserPassword();
        $userEmail = $this->objUser->getUserEmail();
        $idRoles = $this->objUser->getIdRoles();
        $query = "UPDATE usuarios SET Idusuarios='$userCode', Usuario='$userUser', Contrasena='$userPassword', Correo='$userEmail', Idroles='$idRoles' WHERE Idusuarios='$userCode'";
        $objUserController = new ConnectionController();
        $objUserController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objUserController->runCommandSQL($query);
        $objUserController->closeDataBase();
    }

    public function delete()
    {
        $userCode = $this->objUser->getUserCode();
        $query = "DELETE FROM usuarios WHERE Idusuarios ='$userCode'";
        $objUserController = new ConnectionController();
        $objUserController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objUserController->runCommandSQL($query);
        $objUserController->closeDataBase();
    }
}

?>