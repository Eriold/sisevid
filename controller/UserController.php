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
        $query = "INSERT INTO usuarios (Idusuarios, Usuario, Contrasena, Correo, Idroles) VALUES ('$userCode','$userUser', '$userPassword', '$userEmail', $idRoles)";
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
        $userCode = (int) $this->objUser->getUserCode();
        $userUser = $this->objUser->getUserUser();
        $userPassword = $this->objUser->getUserPassword();
        $userEmail = $this->objUser->getUserEmail();
        $idRoles = (int)$this->objUser->getIdRoles();
        $query = "UPDATE usuarios SET Idusuarios=$userCode, Usuario='$userUser', Contrasena='$userPassword', Correo='$userEmail', Idroles=$idRoles WHERE Idusuarios=$userCode";
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

    public function userLogin()
    {
        $userEmail = $this->objUser->getUserEmail();
        $userPassword = $this->objUser->getUserPassword();
        $query = "SELECT Idusuarios, Usuario, Idroles FROM usuarios WHERE Correo='$userEmail' AND Contrasena='$userPassword'";
        $objUserController = new ConnectionController();
        $objUserController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $res = $objUserController->runSelect($query);
        $row = $res->fetch_all(MYSQLI_ASSOC);
        $objUserController->closeDataBase();
        if(count($row) > 0){
            session_start();
            $item = $row[0];
            $_SESSION['id_user'] = $item['Idusuarios'];
            $_SESSION['name_user'] = $item['Usuario'];
            $_SESSION['rol_id'] = $item['Idroles'];
            $_SESSION['close_session'] = false;
            return true;
        }else {
            return false;
        }
    }

    // From Roles
    public function getRoles()
    {
        $query = "SELECT * FROM roles";
        $objRolesController = new ConnectionController();
        $objRolesController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $res = $objRolesController->runSelect($query);
        $row = $res->fetch_all(MYSQLI_ASSOC);
        $objRolesController->closeDataBase();
        return $row;
    }
}
