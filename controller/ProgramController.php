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
        $programCodeSchool = (int) $this->objProgram->getProgramCodeSchool();
        $query = "INSERT INTO program (name, highQuality, idFaculty) VALUES ('$programName', $programHighQuality, '$programCodeSchool')";
        $objProgramController = new ConnectionController();
        $objProgramController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objProgramController->runCommandSQL($query);
        $objProgramController->closeDataBase();
    }

    public function readAll()
    {
        $query = "SELECT * FROM program";
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
        $query = "SELECT idProgram, name, highQuality, idFaculty FROM program WHERE idProgram ='$programCode'";
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
        $programCodeSchool = (int) $this->objProgram->getProgramCodeSchool();
        $query = "UPDATE program SET idProgram='$programCode', name='$programName', highQuality=$programHighQuality, idFaculty='$programCodeSchool' WHERE idProgram='$programCode'";
        $objProgramController = new ConnectionController();
        $objProgramController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objProgramController->runCommandSQL($query);
        $objProgramController->closeDataBase();
    }

    public function delete()
    {
        $programCode = $this->objProgram->getProgramCode();
        $query = "DELETE FROM program WHERE idProgram ='$programCode'";
        $objProgramController = new ConnectionController();
        $objProgramController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objProgramController->runCommandSQL($query);
        $objProgramController->closeDataBase();
    }
}
