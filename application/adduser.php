<?php

require_once '../comfpl/main.php'; 
include_once 'config.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<?php
require_once 'phpinclude/commonmeta.php';
require_once 'phpinclude/commoncss.php';
require_once 'phpinclude/theme.php';
require_once 'phpinclude/commonscript.php';
FPLGlobal::render_bundle_css();
FPLGlobal::render_bundle_script();

?>    
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teamup 
        <?php echo date("d/m/Y");
            if(isset($theme)){
                if ($theme=='0'){
                echo " theme normal";
                };
                if($theme=='1'){
                echo "theme claire";
                };
                if($theme=='2'){
                echo "theme sombre";    
                };
            }; ?>
    </title>
</head>
<body>
  
<section>
    <div class="container d-flex align-items-center justify-content-center mt-5 ">
        <div class="row  border border-dark p-1">
            <form method="POST" action="adduser.php" >
                <div class="form-row">
                    <div class="form-group col-md-6 col-xl-12 ms-1">
                        <label for="Nom">Nom</label>
                        <input type="text" class="form-control" id="Nom" name="nom" placeholder="nom">
                    </div>
                    <div class="form-group col-md-6 col-xl-12 ms-1">
                        <label for="login">Login</label>
                        <input type="text" class="form-control" id="login" name="login" placeholder="login">
                    </div>
                    <div class="form-group col-md-6 col-xl-12 ms-1">
                        <label for="pwd">Mot de passe</label>
                        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Mot de passe ">
                    </div>
                    <div class="form-group col-md-6 col-xl-12 ms-1">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="email ">
                    </div>
                    <input type="number" class="form-control" hidden name="id_utilisateur">
                </div>  
                <button type="submit" class="btn btn-primary" onclick="this.form.submit()">S'enregister</button>
            </form>
        </div>
    </div>
</section>

</body>
</html>