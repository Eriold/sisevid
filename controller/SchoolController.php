<?php

class SchoolController
{

    var $objSchool;

    public function __construct(School $objSchool)
    {
        $this->objSchool = $objSchool;
    }

    public function create()
    {
        $schoolCode = $this->objSchool->getSchoolCode();
        $schoolName = $this->objSchool->getSchoolName();
        $schoolDean = $this->objSchool->getSchoolDean();
        $schoolIES = $this->objSchool->getSchoolIES();
        $query = "INSERT INTO faculty (name Decano, iesName)VALUES('$schoolName','$schoolDean','$schoolIES')";
        $objSchoolController = new ConnectionController();
        $objSchoolController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objSchoolController->runCommandSQL($query);
        $objSchoolController->closeDataBase();
    }

    public function read()
    {
        $schoolCode = $this->objSchool->getSchoolCode();
        $query = "SELECT idFfaculty, name Decano, iesName FROM faculty WHERE idFfaculty ='$schoolCode'";
        $objSchoolController = new ConnectionController();
        $objSchoolController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $res = $objSchoolController->runSelect($query);
        $row = $res->fetch_all(MYSQLI_ASSOC);
        $objSchoolController->closeDataBase();
        return $row;
    }

    public function readAll()
    {

        $query = "SELECT * FROM faculty";
        $objSchoolController = new ConnectionController();
        $objSchoolController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $res = $objSchoolController->runSelect($query);
        $row = $res->fetch_all(MYSQLI_ASSOC);
        $objSchoolController->closeDataBase();
        return $row;
    }

    public function update()
    {
        $schoolCode = $this->objSchool->getSchoolCode();
        $schoolName = $this->objSchool->getSchoolName();
        $schoolDean = $this->objSchool->getSchoolDean();
        $schoolIES = $this->objSchool->getSchoolIES();
        $query = "UPDATE faculty SET idFfaculty='$schoolCode', Nombre='$schoolName', Decano='$schoolDean', iesName='$schoolIES' WHERE idFfaculty='$schoolCode'";
        $objSchoolController = new ConnectionController();
        $objSchoolController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objSchoolController->runCommandSQL($query);
        $objSchoolController->closeDataBase();
    }

    public function delete()
    {

        $schoolCode = $this->objSchool->getSchoolCode();
        $query = "DELETE FROM faculty WHERE idFfaculty ='$schoolCode'";
        $objSchoolController = new ConnectionController();
        $objSchoolController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objSchoolController->runCommandSQL($query);
        $objSchoolController->closeDataBase();
    }
}
