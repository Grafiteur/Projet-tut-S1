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
            <?php include ("menu.php"); ?>
        </nav>

        <div id="textacc">
          <div id="wrapper">
              <div id="one">
                  <div id="oneIn"> <!-- paragraphe principal -->

                      <p>Bienvenue sur DATAQUE, le site qui vous permettras d'avoir toutes les informations générales que vous souhaitez concernant les bases de données.
                          Aujourd'hui les données, considérées comme le pétrole du 21ème siècle, sont au coeur du monde suite à l'explosion du domaine numérique qui ne cesse d'évoluer rapidement, une évolution qui est difficile de suivre en temps réel, notre site vous propose alors d'en apprendre plus sur les idées générales des bases de données. Définissant les bases de données et son historique dans un premier temps , passant par l'impact économique des bases de données ou même encore en EXCLUSIVITÉ l'interview d'un salarié d' <cite>« oracle »</cite> l'une des plus grande entreprise concernant les systèmes de gestion de bases données !</p>

                  </div>
              </div>
              <nav id="three">
                  <?php include ("menu2.php"); ?>
              </nav>
          </div>
        </div><!--fermer le text-->
        <?php include ("footer.php"); ?>
      </div><!--fermer div principal-->
      <?php include ("scripts_js.php"); ?>

    </body>
</html>
