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
        $query = "INSERT INTO Facultades (Nombre, Decano, Ies_nombre)VALUES('Facultad de ingenierías','Alfonso Pérez Márquez','Pascual Bravo');";
        // $query = "INSERT INTO evidencias VALUES ($nameEvidence, $idArticle)";
        $objSchoolController = new ConnectionController();
        $objSchoolController->openDataBase("localhost", "root", "", "sisevid");
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