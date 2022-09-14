<?php
//include_once('./server.php');
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
    public function read(){

    }
    public function update(){

    }
    public function delete(){

    }

    


}