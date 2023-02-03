<?php

$debut = microtime(true);

define('WEBROOT',dirname(__FILE__)); // dirname(Permet de récupérer le dossier parent): Dossier racine
define('ROOT', dirname(WEBROOT)); //dossier webroot
define('DS', DIRECTORY_SEPARATOR); // Permet de créer les séparateurs suivant l
define('CORE', ROOT.DS.'core'); // Lie le chemin du core
define('BASE_URL', dirname(dirname($_SERVER['SCRIPT_NAME']))); //Permet de remonter l'url à Pages

require CORE.DS.'includes.php';

new dispatcher()
?>
<div style="position: fixed; bottom: 0; background: #900; color:#fff; line-height: 30px; height: 30px; left: 0; right: 0; padding-left: 10px;">

<?php
echo 'Page générée en '. round(microtime(true) - $debut, 5).' secondes';
?>
</div>


