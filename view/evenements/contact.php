<header>

<div class="burger" id="menu"></div>
<div class="overlay" id="overlay"></div>
<div class="cross" id="close">X</div>

<nav class="nav-9">

    <a href="<?php echo Router::url('');?>"><img class="logo-nav" src="<?php echo Router::webroot('img/accueil/logoPole.png')?>" alt=""></a>

    <div class="facebook-ville">
        <a href="#"><img class="lien-facebook" src="<?php echo Router::webroot('img/icon/Facebook.svg')?>" alt=""></a>
        <a href="#"><img class="lien-odt" src="<?php echo Router::webroot('img/icon/OfficeTourism.svg')?>" alt=""></a>
    </div>

    <div class="onglet" id="nav">

    <?php $pagesMenu = $this->request('Pages', 'getMenu');?>
                        <?php foreach($pagesMenu as $p): ?>
                            <?php if($p->slug != 'evenements/contact/'):?>
                            <a href="<?php echo Router::url($p->slug);?>" class="onglet-nav">
                                <div class="window-onglet">
                                    <div class="slide-onglet slide-<?php echo $p->id;?>"></div>
                                </div>
                                <p class="lien-nav <?php echo $p->name;?>"><?php echo $p->name;?></p>
                            </a>
                            <?php endif;?>
                        <?php endforeach;?>
    </div> 



</nav>
</header>

<main>

<?php foreach ($pagesMenu as $p): ?>
    <?php if($p->slug == 'evenements/contact/'):?>
        <h1 class="title-page title-<?php echo $p->id?>">Vous Désirez nous contacter?</h1>
    <?php endif;?>
<?php endforeach;?>

    <section class="formulaire">

        <form>
            <div class="color1"></div>
            <div class="color2"></div>
            <div class="color3"></div>
            <div class="color4"></div>
            <div class="color5"></div>
            <div class="color6"></div>
            <div class="color7"></div>
            <div class="color8"></div>
            <h3>Des Questions? CONTACTEZ NOUS !</h3>
            <div class="champs">
            <input type="text" id="nom" placeholder="Qui êtes-vous ?"/>
                    <label for="nom">Nom & Prénom</label>
            </div>
            <div class="champs">
            <input type="text" id="prenom" placeholder="Qui êtes-vous ?"/>
                    <label for="prenom">Adresse Mail</label>
            </div>
            <div class="champs">
            <input type="text" id="mail" placeholder="Quelle est votre adresse Mail ?"/>
                    <label for="mail">Le Nom du Spectacle</label>
            </div>
            <div class="champs">
            <textarea id="msg"  placeholder="Tapez ici votre message!"/></textarea>
            <label for="msg">Message</label>
            </div>
            <div>
                <input class="button" type="submit" value="Envoyer">
            </div>

        </form>

    </section>


</main>


<footer class="footer-9">

    <img class="schema-footer" src="<?php echo Router::webroot('img/footer/footer-9.jpg')?>" alt="">

    <div class="content-footer">

    <a href="<?php echo Router::url('');?>"><img class="pole-footer" src="<?php echo Router::webroot('img/accueil/logoPole.png')?>" alt=""></a>

    <div class="separation-footer1"></div>

    <div class="adresse-footer">

        <div class="contact-footer">
        <div><img class="logo-footer logo1" src="<?php echo Router::webroot('img/icon/Adress.svg')?>" alt=""></div>
                    <div class="nom-contact"><p class="here-footer">Pôle Culturel</p></div>
                    <div class="rue-contact"><p class="here-footer">1 Avenue des Thermes</p></div>
                    <div class="cp-contact"><p class="here-footer">70300 Luxeuil-les-bains</p></div>
        </div>

        <div class="tel-mail">
    
            <div class="tel-footer">
                <img class="logo-footer logo2" src="<?php echo Router::webroot('img/icon/Phone.svg')?>" alt="">
                <div class="text-tel">
                    <p class="tel">03.84.40.56.20</p>
                </div>
            </div>

            <div class="mail-footer">
            <img class="logo-footer logo3" src="<?php echo Router::webroot('img/icon/Mail.svg')?>" alt="">
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
                            <?php if($p->slug != 'evenements/contact/'):?>
                            <a href="<?php echo Router::url($p->slug);?>" class="add" title="<?php echo $p->name;?>" ><?php echo $p->name;?></a>
                            <?php endif;?>
                        <?php endforeach;?>

    </div>

    <div class="separation-footer3"></div>

    <div class="site-footer">

        <div class="facebook-footer">
        <div><img class="logo-facebook img-footer" src="<?php echo Router::webroot('img/icon/Facebook.svg')?>" alt=""></div>
            <a href="#" class="text-footer">Notre Facebook</a>
        </div>
        <div class="ville-footer">
        <div><img class="logo-ville img-footer" src="<?php echo Router::webroot('img/icon/Ville.svg')?>" alt=""></div>
            <a href="#" class="text-footer">Site de notre ville</a>
        </div>
        <div class="odt-footer">
        <div><img class="logo-office img-footer" src="<?php echo Router::webroot('img/icon/OfficeTourism.svg')?>" alt=""></div>
            <a href="#" class="text-footer">Site de notre office du tourisme</a>
        </div>
    </div>
</div>

</footer>







