<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo Router::webroot('css/admin/admin_index/style.css');?>">
    <link rel="stylesheet" href="<?php echo Router::webroot('css/root/root.css');?>">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Moon+Dance&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Sofia+Sans+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    



    <div class="nav">
        <h1>Espace Administrateur</h1>
        <div class="lien-service">
            <a class="lien1" href="<?php echo Router::url('')?>">Voir le site</a>
            <a class="lien2" href="<?php echo Router::url('users/logout')?>"><img src="<?php echo Router::webroot('img/icon/Door.svg')?>" alt="" width="40px" height="57px"></a>
        </div>

    </div>

    <div class="admin-Pe">

        <div class="admin-page">

            <table>
                <div class="top">
                <h2>Mes Pages</h2>
                <a href="<?php echo Router::url('backoffice/admin_editPage'); ?>"><img src="<?php echo Router::webroot('img/icon/AddPage.svg')?>" alt="" width="20px" height="20px"></a>
                </div>

                <tbody>
                    <?php foreach ($pages as $k => $v) : ?>
                        <tr>
                            <td><?php echo $v->name; ?></td>
                            <td><span class="<?php echo ($v->online == 1) ? 'success' : 'error'; ?>"><?php echo ($v->online == 1) ? 'En ligne' : 'Hors Ligne'; ?></span></td>
                            <td>
                                <a href="<?php echo Router::url('backoffice/admin_editPage/' . $v->id); ?>"><img src="<?php echo Router::webroot('img/icon/Edit-Page.svg')?>" alt="" width="30px" height="45px"></a>
                                <a onclick="return confirm('Voulez-vous vraiment supprimer cet article')" href="<?php echo Router::url('backoffice/admin_delete/' . $v->id); ?>"><img src="<?php echo Router::webroot('img/icon/DeletePage.svg')?>" alt="" width="40px" height="57px"></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            
            
        </div>

        <div class="admin-event">

            <div class="event1">
                <div class="admin-spectacle">

                    <table>
                        <div class="top1">
                            <h2 class="spec">Mes Spectacle Musicaux</h2>
                            <a href="<?php echo Router::url('backoffice/admin_editSpectacle'); ?>"><img src="<?php echo Router::webroot('img/icon/AddSpectacle.svg')?>" alt="" width="20px" height="20px"></a>
                        </div>
                    <tbody>
                        <?php foreach ($spectacle as $k => $v) : ?>
                            <tr>
                                <td><?php echo $v->id; ?></td>
                                <td class="name"><?php echo $v->name; ?></td>
                                <td><span class="<?php echo ($v->online == 1) ? 'success' : 'error'; ?>"><?php echo ($v->online == 1) ? 'En ligne' : 'Hors Ligne'; ?></span></td>
                                <td>
                                    <a href="<?php echo Router::url('cockpit/medias/index/' . $v->id); ?>"><img src="<?php echo Router::webroot('img/icon/ImageSpectacle.svg')?>"width="44px" height="45px" alt=""></a>                    
                                </td>
                                <td>
                                    <a href="<?php echo Router::url('backoffice/admin_editSpectacle/' . $v->id); ?>"><img src="<?php echo Router::webroot('img/icon/Edit-Spectacle.svg')?>" alt="" width="40px" height="57px"></a>
                                    <a onclick="return confirm('Voulez-vous vraiment supprimer cet article')" href="<?php echo Router::url('backoffice/admin_delete/' . $v->id); ?>"><img src="<?php echo Router::webroot('img/icon/Delete.svg')?>" alt="" width="40px" height="57px"></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                </div>

                <div class="admin-theatre">

                    <table>
                        <div class="top2">
                            <h2 class="theat">Mes Pièces de Theâtre</h2>
                            <a href="<?php echo Router::url('backoffice/admin_editTheatre'); ?>"><img src="<?php echo Router::webroot('img/icon/AddTheatre.svg')?>" alt="" width="20px" height="20px"></a>
                        </div>
                    <tbody>
                        <?php foreach ($theatre as $k => $v) : ?>
                            <tr>
                                <td><?php echo $v->id; ?></td>
                                <td class="name"><?php echo $v->name; ?></td>
                                <td><span class="<?php echo ($v->online == 1) ? 'success' : 'error'; ?>"><?php echo ($v->online == 1) ? 'En ligne' : 'Hors Ligne'; ?></span></td>
                                <td>
                                    <a href="<?php echo Router::url('cockpit/medias/index/' . $v->id); ?>"><img src="<?php echo Router::webroot('img/icon/ImageTheatre.svg')?>"width="44px" height="45px" alt=""></a>                    
                                </td>
                                <td>
                                    <a href="<?php echo Router::url('backoffice/admin_editTheatre/' . $v->id); ?>"><img src="<?php echo Router::webroot('img/icon/Edit-Theatre.svg')?>" alt="" width="40px" height="57px"></a>
                                    <a onclick="return confirm('Voulez-vous vraiment supprimer cet article')" href="<?php echo Router::url('backoffice/admin_delete/' . $v->id); ?>"><img src="<?php echo Router::webroot('img/icon/Delete.svg')?>" alt="" width="40px" height="57px"></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                </div>
            </div>



            <div class="event2">

                <div class="admin-magie">

                    <table>
                        <div class="top3">
                            <h2 class="magie">Mes Spectacles de Magie</h2>
                            <a href="<?php echo Router::url('backoffice/admin_editPage'); ?>"><img src="<?php echo Router::webroot('img/icon/AddMagie.svg')?>" alt="" width="20px" height="20px"></a>
                        </div>
                    <tbody>
                        <?php foreach ($magie as $k => $v) : ?>
                            <tr>
                                <td><?php echo $v->id; ?></td>
                                <td class="name"><?php echo $v->name; ?></td>
                                <td><span class="<?php echo ($v->online == 1) ? 'success' : 'error'; ?>"><?php echo ($v->online == 1) ? 'En ligne' : 'Hors Ligne'; ?></span></td>
                                <td>
                                    <a href="<?php echo Router::url('cockpit/medias/index/' . $v->id); ?>"><img src="<?php echo Router::webroot('img/icon/ImageMagie.svg')?>"width="44px" height="45px" alt=""></a>                        
                                </td>
                                <td>
                                    <a href="<?php echo Router::url('backoffice/admin_editMagie/' . $v->id); ?>"><img src="<?php echo Router::webroot('img/icon/Edit-Magie.svg')?>" alt="" width="40px" height="57px"></a>
                                    <a onclick="return confirm('Voulez-vous vraiment supprimer cet article')" href="<?php echo Router::url('backoffice/admin_delete/' . $v->id); ?>"><img src="<?php echo Router::webroot('img/icon/Delete.svg')?>" alt="" width="40px" height="57px"></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                </div>               

                <div class="admin-chorale">

                    <table>
                        <div class="top4">
                            <h2>Mes Spectacle de Chorale</h2>
                            <a href="<?php echo Router::url('backoffice/admin_editPage'); ?>"><img src="<?php echo Router::webroot('img/icon/AddChorale.svg')?>" alt="" width="20px" height="20px"></a>
                        </div>

                        <tbody>
                            <?php foreach ($chorale as $k => $v) : ?>
                                <tr>
                                    <td><?php echo $v->id; ?></td>
                                    <td class="name"><?php echo $v->name; ?></td>
                                    <td><span class="<?php echo ($v->online == 1) ? 'success' : 'error'; ?>"><?php echo ($v->online == 1) ? 'En ligne' : 'Hors Ligne'; ?></span></td>
                                    <td>
                                        <a href="<?php echo Router::url('cockpit/medias/index/' . $v->id); ?>"><img src="<?php echo Router::webroot('img/icon/ImageChorale.svg')?>"width="44px" height="45px" alt=""></a>                      
                                    </td>
                                    <td>
                                        <a href="<?php echo Router::url('backoffice/admin_editChorale/' . $v->id); ?>"><img src="<?php echo Router::webroot('img/icon/Edit-Chorale.svg')?>" alt="" width="40px" height="57px"></a>
                                        <a onclick="return confirm('Voulez-vous vraiment supprimer cet article')" href="<?php echo Router::url('backoffice/admin_delete/' . $v->id); ?>"><img src="<?php echo Router::webroot('img/icon/Delete.svg')?>" alt="" width="40px" height="57px"></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="event3">

                <div class="admin-cirque">
  
                    <table>
                        <div class="top5">
                            <h2>Mes Cirques</h2>
                            <a href="<?php echo Router::url('backoffice/admin_editPage'); ?>"><img src="<?php echo Router::webroot('img/icon/AddCirque.svg')?>" alt="" width="20px" height="20px"></a>
                        </div>
                        <tbody>
                            <?php foreach ($cirque as $k => $v) : ?>
                                <tr>
                                    <td><?php echo $v->id; ?></td>
                                    <td class="name"><?php echo $v->name; ?></td>
                                    <td><span class="<?php echo ($v->online == 1) ? 'success' : 'error'; ?>"><?php echo ($v->online == 1) ? 'En ligne' : 'Hors Ligne'; ?></span></td>
                                    <td>
                                        <a href="<?php echo Router::url('cockpit/medias/index/' . $v->id); ?>"><img src="<?php echo Router::webroot('img/icon/ImageCirque.svg')?>"width="44px" height="45px" alt=""></a>                    
                                    </td>
                                    <td>
                                        <a href="<?php echo Router::url('backoffice/admin_editCirque/' . $v->id); ?>"><img src="<?php echo Router::webroot('img/icon/Edit-Cirque.svg')?>" alt="" width="40px" height="57px"></a>
                                        <a onclick="return confirm('Voulez-vous vraiment supprimer cet article')" href="<?php echo Router::url('backoffice/admin_delete/' . $v->id); ?>"><img src="<?php echo Router::webroot('img/icon/Delete.svg')?>" alt="" width="40px" height="57px"></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    </div>


                    <div class="admin-comedie">

                    <table>

                        <div class="top6">
                            <h2>Mes Comédies</h2>
                            <a href="<?php echo Router::url('backoffice/admin_editPage'); ?>"><img src="<?php echo Router::webroot('img/icon/AddComedie.svg')?>" alt="" width="20px" height="20px"></a>
                        </div>
                        <tbody>
                            <?php foreach ($comedie as $k => $v) : ?>
                                <tr>
                                    <td><?php echo $v->id; ?></td>
                                    <td class="name"><?php echo $v->name; ?></td>
                                    <td><span class="<?php echo ($v->online == 1) ? 'success' : 'error'; ?>"><?php echo ($v->online == 1) ? 'En ligne' : 'Hors Ligne'; ?></span></td>
                                    <td>
                                        <a href="<?php echo Router::url('cockpit/medias/index/' . $v->id); ?>"><img src="<?php echo Router::webroot('img/icon/ImageComedie.svg')?>"width="44px" height="45px" alt=""></a>                      
                                    </td>
                                    <td>
                                        <a href="<?php echo Router::url('backoffice/admin_editComedie/' . $v->id); ?>"><img src="<?php echo Router::webroot('img/icon/Edit-Comedie.svg')?>" alt="" width="40px" height="57px"></a>
                                        <a onclick="return confirm('Voulez-vous vraiment supprimer cet article')" href="<?php echo Router::url('backoffice/admin_delete/' . $v->id); ?>"><img src="<?php echo Router::webroot('img/icon/Delete.svg')?>" alt="" width="40px" height="57px"></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    </div>
            </div>



            <div class="admin-autres">

                <table>
                    <div class="top7">
                        <h2>Mes Autres Évènements</h2>
                        <a href="<?php echo Router::url('backoffice/admin_editPage'); ?>"><img src="<?php echo Router::webroot('img/icon/AddAutres.svg')?>" alt="" width="20px" height="20px"></a>
                    </div>
                <tbody>
                    <?php foreach ($autres as $k => $v) : ?>
                        <tr>
                            <td><?php echo $v->id; ?></td>
                            <td class="name"><?php echo $v->name; ?></td>
                            <td><span class="<?php echo ($v->online == 1) ? 'success' : 'error'; ?>"><?php echo ($v->online == 1) ? 'En ligne' : 'Hors Ligne'; ?></span></td>
                            <td>
                                <a href="<?php echo Router::url('cockpit/medias/index/' . $v->id); ?>"><img src="<?php echo Router::webroot('img/icon/ImageAutres.svg')?>"width="44px" height="45px" alt=""></a>                    
                            </td>
                            <td>
                                <a href="<?php echo Router::url('backoffice/admin_editAutres/' . $v->id); ?>"><img src="<?php echo Router::webroot('img/icon/Edit-Autres.svg')?>" alt="" width="40px" height="57px"></a>
                                <a onclick="return confirm('Voulez-vous vraiment supprimer cet article')" href="<?php echo Router::url('backoffice/admin_delete/' . $v->id); ?>"><img src="<?php echo Router::webroot('img/icon/Delete.svg')?>" alt="" width="40px" height="57px"></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            </div>
        </div>
    </div>





</body>
</html>


