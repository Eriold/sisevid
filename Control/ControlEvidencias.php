<?php

class  ControlEvidencias{
    var $objEvidencias;

    function __construct($objEvidencias){
     $this->objEvidencias = $objEvidencias;
    }

    function guardar(){
        $idevi="";
        $nom=$this->objEvidencias->getNombre();
        $idart=$this->objLiterales->getIdarticulos();
        $comandoSql="INSERT INTO Evidencias VALUES('".$idevi."','".$nom."','".$idart."')";
        $objControlConexion=new ControlConexion();
        $objControlConexion->abrirBd("localhost", "root","","bdsisevi");
        $objControlConexion->ejecutarComandoSql($comandoSql);
        $objControlConexion->cerrarBd();
    }

    function update(){
        $idevi=$this->objEvidence->getIdevidence();
        $nom=$this->objEvidence->getName();
        $comandoSql="UPDATE Evidencias SET Nombre='".$nom."' WHERE Idevidencias='".$idevi."'";
        $objConnectionControl=new ControlConexion();
        $objConnectionControl->openDB("localhost", "root","","sisevid");
        $objConnectionControl->executeSQLQuery($sqlQuery);
        $objConnectionControl->closeDB();			

    }

    function delete(){
        $IdFac=$this->objEvidence->getIdEvidence();
        $comandoSql="DELETE FROM Evidencias WHERE Idevidencias='".$idevi."'";
        $objConnectionControl=new ControlConexion();
        $objConnectionControl->openDB("localhost", "root","","sisevid");
        $objConnectionControl->executeSQLQuery($sqlQuery);
        $objConnectionControl->closeDB();			

    }

    function consultar(){
        $nom="";
        $dec="";
        $ies_nom="";
        $IdFac=$this->objEvidencias->getIdEvidencias();
        $comandoSql="SELECT * FROM Evidencias WHERE IdEvidencias='".$idevi."'";
        $objControlConexion=new ControlConexion();
        $objControlConexion->abrirBd("localhost","root","","bdsisevi");
        $recordSet=$objControlConexion->ejecutarSelect($comandoSql);
        if($row=$recordSet->fetch_array(MYSQLI_BOTH)){
            $nom=$row["Nombre"];
            $this->objEvidencias->setNombre($nom);
        }
        return $this->objEvidencias;
    }
    



}



?>