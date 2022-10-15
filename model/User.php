<?
class User{
    private int $userIdUser;
    private string $userUsuario;
    private string $userPassword;
    private string $userCorreo;
    private int $userIdRol;

    function __construct(string $userIdUser,
    string $userUsuario,
    string $userPassword,
    string $userCorreo,
    string $userIdRol){
        $this->userIdUser = $userIdUser;
        $this->userUsuario = $userUsuario;
        $this->userPassword = $userPassword;
        $this->userCorreo = $userCorreo;
        $this->userIdRol = $userIdRol;
    }

    public function getUserIdUser()
    {
        return $this->userIdUser;
    }
    /**
     * Set the value of userIdUser
     *
     * @return  self
     */ 
    public function setUserIdUser($userIdUser)
    {
        $this->userIdUser = $userIdUser;
        return $this;
    }
    /**
     * Get the value of userUsuario
     */
    public function getUserUsuario()
    {
        return $this->userUsuario;
    }
    /**
     * Set the value of userUsuario
     *@return self */
    public function setUserUsuario($userUsuario)
    {
        $this->userUsuario = $userUsuario;
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
     *@return self */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;
        return $this;
    }
    /**
     * Get the value of userCorreo
     */
    public function getUserCorreo()
    {
        return $this->userCorreo;
    }
    /**
     * Set the value of userCorreo
     *@return self */
    public function setUserCorreo($userCorreo)
    {
        $this->userCorreo = $userCorreo;
        return $this;
    }
    /**
     * Get the value of userIdRol
     */
    public function getUserIdRol()
    {
        return $this->userIdRol;
    }
    /**
     * Set the value of userIdRol
     *@return self */
    public function setUserIdRol($userIdRol)
    {
        $this->userIdRol = $userIdRol;
        return $this;
    }
}