


    <header>

        <div class="img">

            <div class="title">
                <h1 class="title-back">SAISON CULTURELLE</h1>
                <h2 class="title2-back">2022-2023</h2>
            </div>


            <div><img class="img-fond" src="img/accueil/fond-anime.gif"></div>
                 <img class="logo-lux" src="img/accueil/logoLuxeuil.png" width="160px" height="180px">
                 <img class="logo-pole"src="img/accueil/logoPole.png" width="190px" height="190px"></div>
        </div>

        <div class="burger" id="menu"><img src="img/icon/Burger.svg" alt=""></div>
        <div class="overlay" id="overlay"></div>
        <div class="cross" id="close">X</div>

            <nav id="nav">
                <ul class="navBar">
                    <?php $pagesMenu = $this->request('Pages', 'getMenu');?>
                        <?php foreach($pagesMenu as $p): ?>
                            <?php if($p->slug !=''):?>
                            <a href="<?php echo Router::url($p->slug);?>" class="onglet onglet-<?php echo $p->id;?>" title="<?php echo $p->name;?>" >
                                <div><img class="icon-<?php echo $p->id;?> icon" src="<?php echo Router::webroot('img/icon/icon-'.$p->id.'.svg');?>" alt=""></div>
                                <div class="separation"></div>
                                <div class="genre"><div class="lien-nav"><?php echo $p->name;?></div></div>
                                </a>
                            <?php endif;?>
                        <?php endforeach;?>
            </nav>

    </header>
    <main>
      
        <section class="affiche">
            
            <div class="content-title">
                <h3 class="title-affiche">Les Évènements à venir</h1>
            </div>
            <?php // Connexion à la base de données
$db = new PDO('mysql:host=localhost;dbname=poleculturel', 'root', '');

// Préparation de la requête SQL
$sql = "SELECT * FROM posts WHERE date > NOW() ORDER BY date ASC LIMIT 3";

// Exécution de la requête SQL
$stmt = $db->query($sql);

// Récupération des résultats
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Affichage des résultats
foreach ($posts as $post) {
    echo $post['name'] . ' - ' . $post['date'] . '<br>';
}?>

            
            <div class="cards" id="cards">

                <div class="card1">

                    <div class="languette1"></div>

                    <div class="bord-img">
                        <div class="stage1">
                            <div class="caroussel">
                              <div class="slide1 a">
                                <img src="/Spectacle/ZZAJ/ZZAJ-1.jpg" alt="">
                              </div>
                              <div class="slide1 b">
                                <img src="/Spectacle/ZZAJ/ZZAJ-2.jpg" alt="">
                              </div>
                              <div class="slide1 c">
                                <img src="/Spectacle/ZZAJ/ZZAJ-3.jpg" alt="">
                              </div>
                            </div>
                          </div>
                    </div>

                    <div class="text1">
                        <div class="title1">
                            <p>ZZAJ À ceux qui se ratent</p>
                        </div>
                        <div class="date-lieu-heure1">
                            <p class="date1">Jeudi 06 Octobre 2022</p>
                            <p class="lieu1">Espace Molière</p>
                            <p class="heure1">20h30</p>
                        </div>
                    </div>

                    <div class="subscribe">
                        <a href="#" class="lien1">
                            <button class="btn-sub1">Réserver Ici</button>
                        </a>
                    </div>

                </div>
                
                <div class="card2">

                    <div class="languette2"></div>

                        <div class="stage2">
                            <div class="caroussel">
                              <div class="slide2 e">
                                <img src="/Spectacle/Astrid/Astrid-1.jpg" alt="">
                              </div>
                              <div class="slide2 f">
                                <img src="/Spectacle/Astrid/Astrid-2.jpg" alt="">
                              </div>
                              <div class="slide2 g">
                                <img src="/Spectacle/Astrid/Astrid-3.jpg" alt="">
                              </div>
                            </div>
                        </div>

                    <div class="text2">
                        <div class="title2">
                            <p>Astrid ou l'acerbe comédie</p>
                        </div>
                        <div class="date-lieu-heure2">
                            <p class="date2">Jeudi 20 Octobre 2022</p>
                            <p class="lieu2">Espace Molière</p>
                            <p class="heure2">20h30</p>
                        </div>
                    </div>

                    <div class="subscribe">
                        <a href="#" class="lien2">
                            <button class="btn-sub2">Réserver Ici</button>
                        </a>
                    </div>

                </div>


                <div class="card3">

                    <div class="languette3"></div>

                        <div class="stage3">
                            <div class="caroussel">
                              <div class="slide3 i">
                                <img src="/Spectacle/Mau D'amour/Maud'amour-1.jpg" alt="">
                              </div>
                              <div class="slide3 j">
                                <img src="/Spectacle/Mau D'amour/Maud'amour-2.jpg" alt="">
                              </div>
                              <div class="slide3 k">
                                <img src="/Spectacle/Mau D'amour/Maud'amour-3.jpg" alt="">
                              </div>
                            </div>
                        </div>

                    <div class="text3">
                        <div class="title3">
                            <p>Mau d'Amour</p>
                        </div>
                        <div class="date-lieu-heure3">
                            <p class="date3">Jeudi 15 Décembree 2022</p>
                            <p class="lieu3">Espace Molière</p>
                            <p class="heure3">20h30</p>
                        </div>
                    </div>

                    <div class="subscribe">
                        <a href="#" class="lien3">
                            <button class="btn-sub3">Réserver Ici</button>
                        </a>
                    </div>

                </div>

            </div>

            <div class="input-img" id="input-img">
                <input type="radio" name="caroussel-item" value="1" id="radio1">
                <input type="radio" name="caroussel-item" value="2" id="radio2">
                <input type="radio" name="caroussel-item" value="3" id="radio3">
            </div>

        </section>



        <section >

            <div><img class="plaquette" src="img/accueil/fondCircle.jpg" alt="">
                <img class="pass" src="img/icon/cardPass.svg" alt="" width="300px" height="170px">

            <div class="content-plaquette">
                <h3 class="title-plaquette">Découvrez notre plaquette de la saison!</h3>
                <h3 class="para-plaquette">Profitez de notre carte Pass'Pôle Culturel et bénéficiez de nombreux avantages!</h3>
            </div>
        
            <a class="circle-plaquette" href="<?php echo Router::webroot('doc/plaquette2022_1.pdf')?>">
                <div class="lien-plaquette"><button class="btn-plaquette">Télécharger Ici</button></div>
            </a>
            </div>
        </section>

        <section class="partenaire">

            <div class="content-title">
                <h3 class="title-partenaire">Nos Partenaires</h1>
            </div>

            <div id="caroussel-partenaire">
                <div id="change"></div>
                <div id="images-partenaire">
                    <img src="img/clients/client-1.png" alt="" id="img1">
                    <img src="img/clients/client-2.png" alt="" id="img2">
                    <img src="img/clients/client-3.png" alt="" id="img3">
                    <img src="img/clients/client-4.png" alt="" id="img4">
                    <img src="img/clients/client-5.png" alt="" id="img5">
                    <img src="img/clients/client-6.png" alt="" id="img6">
                    <img src="img/clients/client-7.png" alt="" id="img7">
                    <img src="img/clients/client-8.png" alt="" id="img8">
                    <img src="img/clients/client-9.png" alt="" id="img9">
                    <img src="img/clients/client-10.jpg" alt="" id="img10">
                    <img src="img/clients/client-11.png" alt="" id="img11">
                    <img src="img/clients/client-12.png" alt="" id="img12">
                    <img src="img/clients/client-13.png" alt="" id="img13">
                    <img src="img/clients/client-14.png" alt="" id="img14">
                    <img src="img/clients/client-15.png" alt="" id="img15">
                    <img src="img/clients/client-16.jpg" alt="" id="img16">
                    <img src="img/clients/client-17.png" alt="" id="img17">
                    <img src="img/clients/client-18.png" alt="" id="img18">
                </div>
            </div>
    
        </section>
    </main>
    <footer>

        <img class="schema-footer" src="img/footer/footer-1.jpg" alt="">

        <div class="content-footer">

            <div><img class="pole-footer" src="img/accueil/logoPole.png" alt=""></div>

            <div class="separation-footer1"></div>

            <div class="adresse-footer">

                <div class="contact-footer">
                    <div><img class="logo-footer logo1" src="img/icon/Adress.svg" alt=""></div>
                    <div class="nom-contact"><p class="here-footer">Pôle Culturel</p></div>
                    <div class="rue-contact"><p class="here-footer">1 Avenue des Thermes</p></div>
                    <div class="cp-contact"><p class="here-footer">70300 Luxeuil-les-bains</p></div>
                </div>

                <div class="tel-mail">
            
                    <div class="tel-footer">
                        <div><img class="logo-footer logo2" src="img/icon/Phone.svg" alt=""></div>
                        <div class="text-tel">
                            <p class="tel">03.84.40.56.20</p>
                        </div>
                    </div>

                    <div class="mail-footer">
                        <div><img class="logo-footer logo3" src="img/icon/Mail.svg" alt=""></div>
                        <div class="text-mail">
                            <p class="mail">poleculturel@luxeuil-les-bains.fr</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="separation-footer2"></div>

            <div class="genre-footer">
            <?php $pagesMenu = $this->request('Pages', 'getMenu');?>
                        <?php foreach($pagesMenu as $p): ?>
                            <?php if($p->slug !=''):?>
                            <a href="<?php echo Router::url($p->slug);?>" class="add" title="<?php echo $p->name;?>" ><?php echo $p->name;?></a>
                            <?php endif;?>
                        <?php endforeach;?>

            </div>

            <div class="separation-footer3"></div>

            <div class="site-footer">

                <div class="facebook-footer">
                    <div><img class="logo-facebook img-footer" src="img/icon/Facebook.svg" alt=""></div>
                    <a href="#" class="text-footer lien-facebook">Notre Facebook</a>
                </div>
                <div class="ville-footer">
                    <div><img class="logo-ville img-footer" src="img/icon/Ville.svg" alt=""></div>
                    <a href="#" class="text-footer lien-ville">Site de notre ville</a>
                </div>
                <div class="odt-footer">
                    <div><img class="logo-office img-footer" src="img/icon/OfficeTourism.svg" alt=""></div>
                    <a href="#" class="text-footer lien-odt">Site de notre office du tourisme</a>
                </div>
                <div class="admin">
                    <div><img class="logo-admin img-footer" src="img/icon/Admin.svg" alt=""></div>
                    <a href="<?php echo Router::url('cockpit');?>" class="text-footer space-admin">Espace Administrateur</a>
                </div>
            </div>
        </div>

    </footer>






