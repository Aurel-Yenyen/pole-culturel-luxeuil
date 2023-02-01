<?php
define('WEBROOT',dirname(__FILE__)); // dirname(Permet de récupérer le dossier parent): Dossier racine
define('ROOT', dirname(WEBROOT)); //dossier webroot
define('DS', DIRECTORY_SEPARATOR); // Permet de créer les séparateurs suivant l
define('CORE', ROOT.DS.'core'); // Lie le chemin du core
define('BASE_URL', dirname(dirname($_SERVER['SCRIPT_NAME']))); //Permet de remonter l'url à Pages

require CORE.DS.'includes.php';

new Dispatcher()
?>



