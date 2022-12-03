<?php

class RolUserController {
    var $objRolUser;

    public function __construct(RolUser $objRolUser)
    {
        $this->objRolUser = $objRolUser;
    }

    public function createListRol() {
        $idRol = $this->objRolUser->getIdRol();
        $idUser = $this->objRolUser->getIdUser();
        $query = "INSERT INTO `roluser` (`idRol`, `idUser`) VALUES ('$idRol', '$idUser')";
        $objRolUserController = new ConnectionController();
        $objRolUserController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objRolUserController->runCommandSQL($query);
        $objRolUserController->closeDataBase();
    }
}