<?php
include('./server.php');
class EvidenceController
{
    var $ojbEvidence;

    public function __construct(Evidence $objEvidence)
    {
        $this->ojbEvidence = $objEvidence;
    }

    public function create()
    {
        $nameEvidence = $this->ojbEvidence->getNameEvidence();
        $idArticle = $this->ojbEvidence->getIdArticle();
        $query = "INSERT INTO Facultades (Nombre, Decano, Ies_nombre)
        VALUES ('Facultad de ingenierías','Alfonso Pérez Márquez','Pascual Bravo');";
        // $query = "INSERT INTO evidencias VALUES ($nameEvidence, $idArticle)";
        $objEvidenceController = new ConnectionController();
        $objEvidenceController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objEvidenceController->runCommandSQL($query);
        $objEvidenceController->closeDataBase();
    }

    public function read()
    {
        $query = "SELECT * FROM evidencias";
        $objEvidenceController = new ConnectionController();
        $objEvidenceController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $resSet = $objEvidenceController->runSelect($query);
        $InfEvidence = $resSet->fetch_all(MYSQLI_ASSOC);
        return $InfEvidence;
    }

    public function update()
    {
        $nameEvidence = $this->ojbEvidence->getNameEvidence();
        $idArticle = $this->ojbEvidence->getIdArticle();
        $query = "UPDATE evidencias SET ($nameEvidence, $idArticle)";
        $objEvidenceController = new ConnectionController();
        $objEvidenceController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objEvidenceController->runCommandSQL($query);
        $objEvidenceController->closeDataBase();
    }

    public function delete()
    {
        $idEvidencias = $this->ojbEvidence->getIdEvidencias();
        $query = "DELETE FROM evidencias WHERE idevidencias='$idEvidencias'";
        $objEvidenceController = new ConnectionController();
        $objEvidenceController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objEvidenceController->runCommandSQL($query);
        $objEvidenceController->closeDataBase();
    }

    public function consult()
    {



    }

}
