<?php

class ProgramController
{

    var $objProgram;

    public function __construct(Program $objProgram)
    {
        $this->objProgram = $objProgram;
    }

    public function create()
    {
        $programName = $this->objProgram->getProgramName();
        $programHighQuality = (int) $this->objProgram->getProgramHighQuality();
        $programCode_IES = (int) $this->objProgram->getProgramCode_IES();
        $programCodeSchool = (int) $this->objProgram->getProgramCodeSchool();
        $query = "INSERT INTO programas (Nombre, Altacalidad, Codsnies, IDFacultades) VALUES ('$programName', $programHighQuality, '$programCode_IES', '$programCodeSchool')";
        $objProgramController = new ConnectionController();
        $objProgramController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objProgramController->runCommandSQL($query);
        $objProgramController->closeDataBase();
    }

    public function readAll()
    {
        $query = "SELECT * FROM programas";
        $objProgramController = new ConnectionController();
        $objProgramController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $res = $objProgramController->runSelect($query);
        $row = $res->fetch_all(MYSQLI_ASSOC);
        $objProgramController->closeDataBase();
        return $row;
    }

    public function read()
    {
        $programCode = $this->objProgram->getProgramCode();
        $query = "SELECT Idprogramas, Nombre, Altacalidad, Codsnies, IDFacultades FROM programas WHERE Idprogramas ='$programCode'";
        $objProgramController = new ConnectionController();
        $objProgramController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $res = $objProgramController->runSelect($query);
        $row = $res->fetch_all(MYSQLI_ASSOC);
        $objProgramController->closeDataBase();
        return $row;
    }

    public function update()
    {
        $programCode = $this->objProgram->getProgramCode();
        $programName = $this->objProgram->getProgramName();
        $programHighQuality = (int) $this->objProgram->getProgramHighQuality();
        $programCode_IES = (int) $this->objProgram->getProgramCode_IES();
        $programCodeSchool = (int) $this->objProgram->getProgramCodeSchool();
        $query = "UPDATE programas SET Idprogramas='$programCode', Nombre='$programName', Altacalidad=$programHighQuality, Codsnies='$programCode_IES', IDFacultades='$programCodeSchool' WHERE Idprogramas='$programCode'";
        $objProgramController = new ConnectionController();
        $objProgramController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objProgramController->runCommandSQL($query);
        $objProgramController->closeDataBase();
    }

    public function delete()
    {
        $programCode = $this->objProgram->getProgramCode();
        $query = "DELETE FROM programas WHERE Idprogramas ='$programCode'";
        $objProgramController = new ConnectionController();
        $objProgramController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objProgramController->runCommandSQL($query);
        $objProgramController->closeDataBase();
    }
}
