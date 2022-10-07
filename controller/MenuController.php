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
}
?>