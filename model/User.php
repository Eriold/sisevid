<?php 
class User{
    private string $userCode;
    private string $userUser;
    private string $userPassword;
    private string $userEmail;
    private int $idRoles;

    function __construct(string $UserCode,
    string $UserUser,
    string $UserPassword,
    string $UserEmail,
    int $IdRoles)
    {
        $this->userCode = $UserCode;
        $this->userUser = $UserUser;
        $this->userPassword = $UserPassword;
        $this->userEmail = $UserEmail;
        $this->idRoles = $IdRoles;
    }


    /**
     * Get the value of userCode
     */ 
    public function getUserCode()
    {
        return $this->userCode;
    }

    /**
     * Set the value of userCode
     *
     * @return  self
     */ 
    public function setUserCode($userCode)
    {
        $this->userCode = $userCode;

        return $this;
    }

    /**
     * Get the value of userUser
     */ 
    public function getUserUser()
    {
        return $this->userUser;
    }

    /**
     * Set the value of userUser
     *
     * @return  self
     */ 
    public function setuserUser($userUser)
    {
        $this->userUser = $userUser;

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