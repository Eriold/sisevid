<?php

class  ControlFacultades{
    var $objschool;

    function __construct($objschool){
     $this->objschool = $objschool;
    }

    function guardar(){
        $IdFac="";
        $nom=$this->objschool->getNombre();
        $dec=$this->objschool->getDecano();
        $ies_nom=$this->objschool->getIes_nombre();
        $comandoSql="INSERT INTO facultades VALUES('".$IdFac."','".$nom."','".$dec."','".$ies_nom."')";
        $objSchoolControl=new ControlConexion();
        $objSchoolControl->abrirBd("localhost", "root","","bdsisevi");
        $objSchoolControl->ejecutarComandoSql($comandoSql);
        $objSchoolControl->cerrarBd();
    }

    function modificar(){
        $IdFac=$this->objschool->getSchoolcod();
        $nom=$this->objschool->getNombre();
        $dec=$this->objschool->getDecano();
        $ies_nom=$this->objschool->getIes_nombre();
        $comandoSql="UPDATE facultades SET Nombre='".$nom."',Decano='".$dec."',Ies_nombre='".$ies_nom."' WHERE Idfacultades='".$IdFac."'";
        $objSchoolControl=new ControlConexion();
        $objSchoolControl->abrirBd("localhost", "root","","bdsisevi");
        $objSchoolControl->ejecutarComandoSql($comandoSql);
        $objSchoolControl->cerrarBd();			

    }

    function borrar(){
        $IdFac=$this->objschool->getSchoolcod();
        $comandoSql="DELETE FROM facultades WHERE Idfacultades='".$IdFac."'";
        $objSchoolControl=new ControlConexion();
        $objSchoolControl->abrirBd("localhost", "root","","bdsisevi");
        $objSchoolControl->ejecutarComandoSql($comandoSql);
        $objSchoolControl->cerrarBd();			

    }

    function consultar(){
        $nom="";
        $dec="";
        $ies_nom="";
        $IdFac=$this->objschool->getSchoolcod();
        $comandoSql="SELECT * FROM facultades WHERE Idfacultades='".$IdFac."'";
        $objSchoolControl=new ControlConexion();
        $objSchoolControl->abrirBd("localhost","root","","bdsisevi");
        $recordSet=$objSchoolControl->ejecutarSelect($comandoSql);
        if($row=$recordSet->fetch_array(MYSQLI_BOTH)){
            $nom=$row["Nombre"];
            $dec=$row["Decano"];
            $ies_nom=$row["Ies_nombre"];
            $this->objschool->setNombre($nom);
            $this->objschool->setDecano($dec);
            $this->objschool->setIes_nombre($ies_nom);
        }
        return $this->objschool;
    }
    function consultarfacultades(){
 
        $comandoSql="SELECT Idfacultades,Nombre FROM facultades";
        $objSchoolControl=new ControlConexion();
        $objSchoolControl->abrirBd("localhost","root","","bdsisevi");
        $recordSet=$objSchoolControl->ejecutarSelect($comandoSql);
        $objschool=$recordSet;
        /*if($row=$recordSet->fetch_array(MYSQLI_BOTH)){
            $nom=$row["Nombre"];
            $altcal=$row["Altacalidad"];
            $codsn=$row["Codsnies"];
            $this->objProgramas->setNombre($nom);
            $this->objProgramas->setAltacalidad($altcal);
            $this->objProgramas->setCodsnies($codsn);
        }*/
        return $this->objschool;
    }



}



?>