<?php
require_once '../comfpl/main.php';

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
    <header>
        <?php 
        require_once 'phpinclude/navbar.php';        
        ?>
    </header>
    <h1 class="text-center">BONJOUR LA TEAM c'est l'essai <span style="color:red;"> numero 2 with redirection</span></h1>
<section>
    <?php 
    require_once 'views/index_partial.php';
    ?>
</section>
</body>
</html>