<?php

class StateController
{

    var $objState;

    public function __construct(State $objState)
    {
        $this->objState = $objState;
    }

    public function create()
    {
        $schoolName = $this->objSchool->getSchoolName();
        $schoolDean = $this->objSchool->getSchoolDean();
        $schoolIES = $this->objSchool->getSchoolIES();
        $query = "INSERT INTO faculty (name, dean, iesName)VALUES('$schoolName','$schoolDean','$schoolIES')";
        $objSchoolController = new ConnectionController();
        $objSchoolController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objSchoolController->runCommandSQL($query);
        $objSchoolController->closeDataBase();
    }

    public function read()
    {
        $schoolCode = $this->objSchool->getSchoolCode();
        $query = "SELECT idFaculty, name, dean, iesName FROM faculty WHERE idFaculty ='$schoolCode'";
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
        $query = "UPDATE faculty SET idFaculty='$schoolCode', name='$schoolName', dean='$schoolDean', iesName='$schoolIES' WHERE idFaculty='$schoolCode'";
        $objSchoolController = new ConnectionController();
        $objSchoolController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objSchoolController->runCommandSQL($query);
        $objSchoolController->closeDataBase();
    }

    public function delete()
    {

        $schoolCode = $this->objSchool->getSchoolCode();
        $query = "DELETE FROM facultades WHERE Idfacultades ='$schoolCode'";
        $objSchoolController = new ConnectionController();
        $objSchoolController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objSchoolController->runCommandSQL($query);
        $objSchoolController->closeDataBase();
    }
}
