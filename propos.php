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

        <div id="textprop">
          <div id="wrapper">
              <div id="one">
                  <div id="oneIn"> <!-- paragraphe principal -->

                      <br><p class="centre1">IUT de Belfort-Montbéliard</p>
                      <p class="centre1">Projet tutoré du semestre 1</p>
                      <p class="centre1">Site créé par :</p>
                      <p class="centre1">Jordan LAPLACE (chef de projet)</p>
                      <p class="centre1">Bilal CHAABAN</p>
                      <p class="centre1">Quentin HERVY</p>
                      <p class="centre1">David STORTI</p><br>
                      <p class="centre1">Nous remercions pour leur aide et soutiens :</p>
                      <p class="centre1">Ibrahim HAMDAN</p>
                      <p class="centre1">Corinne PATERLINI</p>
                      <p class="centre1">Thierry SAHLER</p>
                      <p class="centre1">David TRANNOY</p>


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
