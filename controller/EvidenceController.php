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
        $query = "INSERT INTO evidencias VALUES ($nameEvidence, $idArticle)";
        $objEvidenceController = new ConnectionController();
        $objEvidenceController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objEvidenceController->runCommandSQL($query);
        $objEvidenceController->closeDataBase();
    }

    public function read()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}
