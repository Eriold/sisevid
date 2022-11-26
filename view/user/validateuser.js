//Método para ver si permite crear usuarios
function userCreation( $can_create_user ) {

    //Obtener el usuario actual
    $user = wp_get_current_user();
	$can_create_user = true;
	$allowed_roles = array('Administrador(a) del sistema');
		
	//Comparar rol de usuario con roles permitidos
		if ( array_intersect($allowed_roles, array($user)) ) {
		    $can_create_user = false;
		}	
	return $can_create_user;
}

//Método para ver si permite cambiar el estado de una evidencia
function changeEvidenceStatus($can_change_status){

    //Obtener el usuario actual
    $user = wp_get_current_user();
	$can_change_status = true;
	$allowed_roles = array('Validador(a)');
		
	//Comparar rol de usuario con roles permitidos
		if ( array_intersect($allowed_roles, array($user)) ) {
		    $can_change_status = false;
		}	
	return $can_change_status;
}

//Método para ver si permite ver los reportes y las tablas
function accessReportsAndTables($can_access_reports_tables){
    //Obtener el usuario actual
    $user = wp_get_current_user();
	$can_access_reports_tables= true;
	$allowed_roles = array('Administrador(a) del sistema');
		
	//Comparar rol de usuario con roles permitidos
		if ( array_intersect($allowed_roles, array($user)) ) {
		    $can_access_reports_tables = false;
		}	
	return $can_access_reports_tables;
}


 if($users_roles.val() == 1){
    //'Administrador(a) del sistema';
    userCreation();
 }
 if($users_roles.val() == 2){
    //'Verificador(a)';
    !userCreation();
    
 }
 if($users_roles.val() == 3){
    //'Validador(a)';
    !userCreation();
    changeEvidenceStatus();
 }
 if($users_roles.val() == 4){
    //'Administrativo(a)';
    !userCreation();
    accessReportsAndTables();
 }

