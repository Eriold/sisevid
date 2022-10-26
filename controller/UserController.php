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
        $query = "INSERT INTO user (idUser, user, password, email, idRol) VALUES ('$userCode','$userUser', '$userPassword', '$userEmail', $idRoles)";
        $objUserController = new ConnectionController();
        $objUserController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objUserController->runCommandSQL($query);
        $objUserController->closeDataBase();
    }

    public function readAll()
    {
        $query = "SELECT * FROM user";
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
        $query = "SELECT idUser, user, password, email, idRol FROM user WHERE idUser ='$userCode'";
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
        $query = "UPDATE user SET idUser=$userCode, user='$userUser', password='$userPassword', email='$userEmail', idRol=$idRoles WHERE idUser=$userCode";
        $objUserController = new ConnectionController();
        $objUserController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objUserController->runCommandSQL($query);
        $objUserController->closeDataBase();
    }

    public function delete()
    {
        $userCode = $this->objUser->getUserCode();
        $query = "DELETE FROM user WHERE idUser ='$userCode'";
        $objUserController = new ConnectionController();
        $objUserController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objUserController->runCommandSQL($query);
        $objUserController->closeDataBase();
    }

    public function userLogin()
    {
        $userEmail = $this->objUser->getUserEmail();
        $userPassword = $this->objUser->getUserPassword();
        $query = "SELECT idUser, user, idRol FROM user WHERE email='$userEmail' AND password='$userPassword'";
        $objUserController = new ConnectionController();
        $objUserController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $res = $objUserController->runSelect($query);
        $row = $res->fetch_all(MYSQLI_ASSOC);
        $objUserController->closeDataBase();
        if(count($row) > 0){
            session_start();
            $item = $row[0];
            $_SESSION['id_user'] = $item['idUser'];
            $_SESSION['name_user'] = $item['user'];
            $_SESSION['rol_id'] = $item['idRol'];
            $_SESSION['close_session'] = false;
            return true;
        }else {
            return false;
        }
    }

    // From Roles
    public function getRoles()
    {
        $query = "SELECT * FROM rol";
        $objRolesController = new ConnectionController();
        $objRolesController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $res = $objRolesController->runSelect($query);
        $row = $res->fetch_all(MYSQLI_ASSOC);
        $objRolesController->closeDataBase();
        return $row;
    }
}
