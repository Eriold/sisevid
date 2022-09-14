<?php

class SchoolController{

    var $objSchool;

    public function __construct(School $objSchool)
    {
        $this->objSchool = $objSchool;
    }

    public function create(){
        $schoolCode = $this->objSchool->getSchoolCode();
        $schoolName = $this->objSchool->getSchoolName();
        $schoolDean = $this->objSchool->getSchoolDean();
        $schoolIES = $this->objSchool->getSchoolIES();
        $query = "INSERT INTO Facultades (Nombre, Decano, Ies_nombre)VALUES('$schoolName','$schoolDean','$schoolIES')";
        $objSchoolController = new ConnectionController();
        $objSchoolController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objSchoolController->runCommandSQL($query);
        $objSchoolController->closeDataBase();
    }
    public function readAll(){

        $query = "SELECT * FROM facultades";
        $objSchoolController = new ConnectionController();
        $objSchoolController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $res = $objSchoolController->runSelect($query);
        $row = $res->fetch_all(MYSQLI_ASSOC);
        $objSchoolController->closeDataBase();
        return $row;

    }
    public function update(){

    }
    public function delete(){

        $schoolCode = $this->objSchool->getSchoolCode();
        $query = "DELETE FROM facultades WHERE Idfacultades ='$schoolCode'";
        $objSchoolController = new ConnectionController();
        $objSchoolController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objSchoolController->runCommandSQL($query);
        $objSchoolController->closeDataBase();
        
    }

    


}