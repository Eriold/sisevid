<?php

class MenuController
{

    var $objMenu;

    public function __construct(Menu $objMenu)
    {
        $this->objMenu = $objMenu;
    }

    public function create()
    {
        $menuName = $this->objMenu->getMenuName();
        $menuDescription = $this->objMenu->getMenuDescription();
        $query = "INSERT INTO menus (Nombre, Descripcion)VALUES('$menuName','$menuDescription')";
        $objMenuController = new ConnectionController();
        $objMenuController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objMenuController->runCommandSQL($query);
        $objMenuController->closeDataBase();
    }

    public function read()
    {
        $menuCode = $this->objMenu->getMenuCode();
        $query = "SELECT Idmenus, Nombre, Descripcion FROM menus WHERE Idmenus ='$menuCode'";
        $objMenuController = new ConnectionController();
        $objMenuController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $res = $objMenuController->runSelect($query);
        $row = $res->fetch_all(MYSQLI_ASSOC);
        $objMenuController->closeDataBase();
        return $row;
    }
}
?>