<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <h1>Zone Administrateur</h1>
    
    <form action="<?php Router::url('users/login');?>" method="post">
        <?php echo $this->Form->input('login', 'Identifiant');?>
        <?php echo $this->Form->input('password', 'Mot de Passe', array('type' => 'password'));?>

        <input type="submit" value="Se Connecter">
    </form>
</body>
</html>