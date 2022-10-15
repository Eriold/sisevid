<?php
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
        $idArticle = (int) $this->ojbEvidence->getIdArticle();
        $query = "INSERT INTO `evidencias` (`Idevidencias`, `Nombre`, `Idarticulos`) VALUES (NULL, '$nameEvidence', $idArticle);";
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

    // From Article

    public function allArticle()
    {
        $query = "SELECT Idarticulos, Nombre FROM articulos";
        $objArticlesController = new ConnectionController();
        $objArticlesController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $res = $objArticlesController->runSelect($query);
        $row = $res->fetch_all(MYSQLI_ASSOC);
        $objArticlesController->closeDataBase();
        return $row;
    }
}
