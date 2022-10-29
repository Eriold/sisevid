<?php 
class State{
    private string $stateCode;
    private string $stateObsDate;
    private string $stateValiDate;
    private string $stateType;
    private string $stateEvidenceCode;

    function __construct(string $stateCode,
    string $StateObsDate,
    string $StateValiDate,
    string $StateType,
    string $StateEvidenceCode)
    {
        $this->stateCode = $stateCode;
        $this->stateObsDate = $StateObsDate;
        $this->stateValiDate = $StateValiDate;
        $this->stateType = $StateType;
        $this->stateEvidenceCode = $StateEvidenceCode;
    }


    /**
     * Get the value of userCode
     */ 
    public function getStateCode()
    {
        return $this->stateCode;
    }

    /**
     * Set the value of userCode
     *
     * @return  self
     */ 
    public function setStateCode($stateCode)
    {
        $this->stateCode = $stateCode;

        return $this;
    }

    /**
     * Get the value of userUser
     */ 
    public function getStateObsDate()
    {
        return $this->stateObsDate;
    }

    /**
     * Set the value of userUser
     *
     * @return  self
     */ 
    public function setStateObsDate($stateObsDate)
    {
        $this->stateObsDate = $stateObsDate;

        return $this;
    }

    /**
     * Get the value of userPassword
     */ 
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * Set the value of userPassword
     *
     * @return  self
     */ 
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    /**
     * Get the value of userEmail
     */ 
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Set the value of userEmail
     *
     * @return  self
     */ 
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Get the value of idRoles
     */ 
    public function getIdRoles()
    {
        return $this->idRoles;
    }

    /**
     * Set the value of idRoles
     *
     * @return  self
     */ 
    public function setIdRoles($idRoles)
    {
        $this->idRoles = $idRoles;

        return $this;
    }
}
?> 