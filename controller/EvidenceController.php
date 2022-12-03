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
        $creationDate = $this->ojbEvidence->getDateEvidence();
        $modificationDateEvidence = $this->ojbEvidence->getDateModificationEvidence();
        $observationEvidence = $this->ojbEvidence->getObservationEvidence();
        $descriptionEvidence = $this->ojbEvidence->getDescriptionEvidence();
        $query = "INSERT INTO `evidence` (`idEvidence`, `name`, `idArticle`, `creationDate`, `modificationDate`, `observation`, `description`) VALUES ('', '$nameEvidence', '$idArticle', '$creationDate', '$modificationDateEvidence', '$observationEvidence', '$descriptionEvidence');";
        $objEvidenceController = new ConnectionController();
        $objEvidenceController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objEvidenceController->runCommandSQL($query);
        $objEvidenceController->closeDataBase();
    }

    public function readAll()
    {
        $query = "SELECT * FROM evidence";
        $objEvidenceController = new ConnectionController();
        $objEvidenceController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $resSet = $objEvidenceController->runSelect($query);
        $InfEvidence = $resSet->fetch_all(MYSQLI_ASSOC);
        return $InfEvidence;
    }

    public function read()
    {
        $codeEvidence = $this->ojbEvidence->getIdEvidencias();
        $query = "SELECT idEvidence , name, idArticle , creationDate, modificationDate, observation, description FROM evidence WHERE idEvidence ='$codeEvidence'";
        $objProgramController = new ConnectionController();
        $objProgramController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $res = $objProgramController->runSelect($query);
        $row = $res->fetch_all(MYSQLI_ASSOC);
        $objProgramController->closeDataBase();
        return $row;
    }

    public function update()
    {
        $codeEvidence = $this->ojbEvidence->getIdEvidencias();
        $nameEvidence = $this->ojbEvidence->getNameEvidence();
        $idArticle = (int) $this->ojbEvidence->getIdArticle();
        $creationDate = $this->ojbEvidence->getDateEvidence();
        $modificationDateEvidence = $this->ojbEvidence->getDateModificationEvidence();
        $observationEvidence = $this->ojbEvidence->getObservationEvidence();
        $descriptionEvidence = $this->ojbEvidence->getDescriptionEvidence();
        //$query = "UPDATE evidence SET ($nameEvidence, $idArticle, $creationDate, $modificationDateEvidence, $observationEvidence, $descriptionEvidence) WHERE idEvidence ='$codeEvidence'";
        //$query = "UPDATE evidence SET name='$nameEvidence', idArticle='$idArticle', creationDate='$creationDate', modificationDate= '$modificationDateEvidence', observation= '$observationEvidence', description= '$descriptionEvidence' WHERE idEvidence ='$codeEvidence'";
        $query = "UPDATE `evidence` SET `name` = '$nameEvidence',`idArticle` = '$idArticle', `creationDate` = '$creationDate', `modificationDate` = '$modificationDateEvidence', `observation` = '$observationEvidence', `description` = '$descriptionEvidence'  WHERE `evidence`.`idEvidence` = $codeEvidence";
        $objEvidenceController = new ConnectionController();
        $objEvidenceController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objEvidenceController->runCommandSQL($query);
        $objEvidenceController->closeDataBase();
    }

    public function delete()
    {
        $idEvidencias = $this->ojbEvidence->getIdEvidencias();
        $query = "DELETE FROM evidence WHERE idEvidence='$idEvidencias'";
        $objEvidenceController = new ConnectionController();
        $objEvidenceController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objEvidenceController->runCommandSQL($query);
        $objEvidenceController->closeDataBase();
    }

    // From Article

    public function allArticle()
    {
        $query = "SELECT idArticle	, name FROM article";
        $objArticlesController = new ConnectionController();
        $objArticlesController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $res = $objArticlesController->runSelect($query);
        $row = $res->fetch_all(MYSQLI_ASSOC);
        $objArticlesController->closeDataBase();
        return $row;
    }
}
