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
        $programCode = $this->objProgram->getProgramCode();
        $programName = $this->objProgram->getProgramName();
        $programHighQuality = $this->objProgram->getProgramHighQuality();
        $programCode_IES = $this->objProgram->getProgramCode_IES();
        $query = "INSERT INTO programas (Nombre, Altacalidad, Codsnies, IDFacultades)VALUES('$programCode','$programName','$programHighQuality','$programCode_IES')";
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
}

?>