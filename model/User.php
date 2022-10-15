<?
class User{
    private string $userIdUser;
    private string $userUsuario;
    private string $userPassword;
    private string $userCorreo;
    private string $userIdRol;

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
}