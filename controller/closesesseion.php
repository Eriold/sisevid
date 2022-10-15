<?php
session_start();
session_destroy();
session_start();
$_SESSION['close_session'] = true;
header('Location: ../view/login.php');
