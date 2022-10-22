<?

 class UserController {
    var $objUser;

    public function __construct(User $objUser)
    {
        $this->objUser = $objUser;
    }

    public function create()
    {
        $userId = $this->objUser->getUserIdUser();
        $userUsuario = $this->objUser->getUserUsuario();
        $userPassword = $this->objUser->getUserPassword();
        $userCorreo = $this->objUser->getUserCorreo();
        $userIdRol = $this->objUser->getUserIdRol();
        $query = "INSERT INTO usuarios (Idusuarios, Usuario, Contraseña, Correo, Idroles) VALUES ('$userUsuario','$userPassword','$userCorreo')";
        $objSchoolController = new ConnectionController();
        $objSchoolController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objSchoolController->runCommandSQL($query);
        $objSchoolController->closeDataBase();
    }
    public function validate(){
        $userPassword = $this->objUser->getUserPassword();
        $userCorreo = $this->objUser->getUserCorreo();
        $query = "SELECT * FROM usuarios WHERE Correo = '".$userCorreo."'AND Contraseña = '".$userPassword."'";
        $objSchoolController = new ConnectionController();
        $objSchoolController->openDataBase(LOCALHOST, USER, PASSWORD, DATABASE);
        $objSchoolController->runCommandSQL($query);
        $objSchoolController->closeDataBase();
        
    }
 }