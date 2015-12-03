<!DOCTYPE html>
<html>

    <?php include ("head.php"); ?>

    <body>
      <div id="principal">
        <header>
            <a class="img" href="#"><img src="images/home_1.png" /></a>
            <span class="titre"> <a href="#"> DATAQUE </a></span>
            <span class="stitre"> <a href="#">&#8658; Information sur les bases de données et son application <br/> dans le datascientisme </a></span>
            <img class="img2" src="images/classeur.png" />
        </header>

        <nav>
            <div id="menu">
                <ul id="nav">
                    <li class="actuel"><a href="#">Accueil</a></li>
                    <li><a href="#">Bases de données</a></li>
                        <!-- <ul>
                            <li><a href="#">Présentation</a></li>
                            <li><a href="#">Exploitation</a></li>
                            <li><a href="#">Cours PHP+MySQL</a></li>

                        </ul> -->
                    <li><a href="#">Oracle</a></li>
                        <!-- <ul>
                            <li><a href="#">Information</a></li>
                            <li><a href="#">Interview</a></li>

                    </ul> -->
                    <li><a href="#">À propos de</a></li>&nbsp&nbsp&nbsp&nbsp&nbsp
                    <a id=slogan href="http://ideeslogan.com">Brique par brique vers l'avenir !</a>
                </ul>
            </div><!--fermer le menu-->

        </nav>

        <div id="text">
          <div id="wrapper">
              <div id="one">
                  <div id="oneIn"> <!-- paragraphe principal -->
                      <p class="hide">Sommaire <a href="" onclick="javascript:visibilite('sommaire'); return false;">{Masquer}</a></p>
                      <div id="sommaire" style="display:;">
                          <ol style="list-style-type:upper-roman;">
                              <li><a href="">Les listes à puces</a></li>
                              <ol style="list-style-type:arabic-numbers;">
                                  <li><a href="">Les styles de puces</a></li>
                                  <li><a href="">Personnaliser ses puces</a></li>
                                  <li><a href="">Supprimer les puces</a></li>
                              </ol>
                              <li><a href="">Les listes numérotées</a></li>
                              <ol style="list-style-type:arabic-numbers;">
                                  <li><a href="">Démarrer la numérotation avec START</a></li>
                                  <li><a href="">Les styles de numérotation</a></li>
                                  <ol style="list-style-type:lower-alpha;">
                                      <li><a href="">arabic-numbers</a></li>
                                      <li><a href="">lower-alpha</a></li>
                                      <li><a href="">upper-alpha</a></li>
                                      <li><a href="">lower-roman</a></li>
                                      <li><a href="">upper-roman</a></li>
                                  </ol>
                                  <li><a  href="">Supprimer la numérotation</a></li>
                              </ol>
                          </ol>
                      </div>
                      <div class="niva">1. Mon premier titre est ici</div>
                      <p>une petite intro bla bla une petite intro bla bla une petite intro bla bla une petite intro bla bla une petite intro bla
                          bla une petite intro bla bla une petite intro bla bla une petite intro bla bla</p>
                      <div class="nivb">1. Mon 2nd titre est ici</div><br/>
                      <div class="nivc">1. Mon 3eme titre est ici</div>
                      <p>Mon texte est ici je parle de ma partie et blabla et blabla Mon texte est ici je parle de ma partie et blabla
                          et blabla Mon texte est ici je parle de ma partie et blabla et blabla Mon texte est ici je parle de ma partie et
                          blabla et blabla Mon texte est ici </p> <p>je parle de ma partie et blabla et blabla Mon texte est ici je parle de ma partie
                          et blabla et blabla Mon texte est ici je parle de ma partie et blabla et blabla Mon texte est ici je parle de ma partie
                          et blabla et blabla Mon texte est ici je parle de ma partie</p> <p> et blabla et blabla Mon texte est ici je parle de ma partie
                          et blabla et blabla Mon texte est ici je parle de ma partie et blabla et blabla Mon texte est ici je parle de ma partie
                          et blabla et blabla </p>
                      <div class="nivc">1. Mon 3eme titre est ici</div>
                      <p>Mon texte est ici je parle de ma partie et blabla et blabla Mon texte est ici je parle de ma partie et blabla
                          et blabla Mon texte est ici je parle de ma partie et blabla et blabla Mon texte est ici je parle de ma partie et
                          blabla et blabla Mon</p> <p>texte est ici je parle de ma partie et blabla et blabla Mon texte est ici je parle de ma partie
                          et blabla et blabla Mon texte est ici je parle de ma partie et blabla et </p> <p>blabla Mon texte est ici je parle de ma partie
                          et blabla et blabla Mon texte est ici je parle de ma partie et blabla et blabla Mon texte est ici je parle de ma partie
                          et blabla et blabla Mon texte est ici je parle de ma partie et blabla et blabla Mon texte est ici je parle de ma partie
                          et blabla et blabla </p>
                  </div>
              </div>
              <nav id="three">
                  <div id="menu2">
                  <include type="modules" name="mainNav" style="xhtml" />
                <ul id="navigation">
                <img class="img3" src="images/bloc.png" />
                <img class="img4" src="images/basv3.png" />
                <li><a href="#" title="Retour à l'accueil">Accueil</a></li>
                <li class="toggleSubMenu"><span>Base de données</span>
                    <ul class="subMenu">

                    <li><a href="" title="">Présentation</a></li>
                    <li><a href="" title="">Exploitation</a></li>
                    <li><a href="" title="">Cours PHP+MySQL</a></li>


                    </ul>
                </li>
                <li class="toggleSubMenu"><span>Oracle</span>
                    <ul class="subMenu">
                    <li><a href="" title="">Informations</a></li>
                    <li><a href="" title="">Interview</a></li>

                    </ul>
                </li>
                <li><a href="" title="">À propos</a></li>
                </ul>
                  </div>
              </nav>
          </div>
        </div><!--fermer le text-->
        <?php include ("footer.php"); ?>
      </div><!--fermer div principal-->
      <?php include ("scripts_js.php"); ?>

    </body>
</html>
