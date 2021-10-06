<?php 
require_once 'config.php'; 

const user_profile ='user_profile';
if(isset($_COOKIE[user_profile])){
$theme = $_COOKIE[user_profile];
}
else{
    $theme= 0;
};


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $theme = $_POST['lst_theme'];
//    $expiration = time()+(60*60);
    setcookie(user_profile, $theme, time()+3600);
};

if ($theme === '2' ){
    FPLGlobal::$theme="fonce";
}else{
    FPLGlobal::$theme="default";
}


require_once 'views/_layout.php';