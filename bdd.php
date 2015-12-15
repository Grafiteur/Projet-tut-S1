<?php

//si les champs texte on une valeur et si il sont différent de NULL
if (isset ($_POST['nom'])&& isset($_POST['prenom'])&& isset($_POST['pseudo']) && isset($_POST['adresse']) && isset($_POST['adresse2']) && isset($_POST['mdp']) && isset($_POST['mdp2']))
{
    if($_POST['nom'] != NULL AND $_POST['prenom'] != NULL AND $_POST['pseudo'] != NULL AND $_POST['adresse'] != NULL AND $_POST['adresse2'] != NULL AND $_POST['mdp'] != NULL AND $_POST['mdp2'] != NULL)
    {

        //connection a la base de donnée
        try
        {
            $bdd = new
            PDO('mysql:host=localhost;dbname=projet_tut;charset=utf8', 'root','');
            // affiche les erreurs PDO
            $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
    }
    //initialisation des valeurs des champs du formulaire avec une sécurité "htmlentities"
    $donnees['nom']= htmlentities($_POST['nom']);
    $donnees['prenom']= htmlentities($_POST['prenom']);
    $donnees['pseudo']= htmlentities($_POST['pseudo']);
    $donnees['adresse']= htmlentities($_POST['adresse']);
    $donnees['adresse2']= htmlentities($_POST['adresse2']);
    $donnees['mdp']= htmlentities($_POST['mdp']);
    $donnees['mdp2']= htmlentities($_POST['mdp2']);

    //initialisation des erreurs
    //on créé une variale erreur dans laquel on mais le message
    if (!preg_match("/[a-zA-Z -]{2,}/", $_POST["nom"]))
    {
        $erreur['nom'] = "Votre nom doit être composé de 2 caractère au minimum";
    }
    if (!preg_match("/[a-zA-Z -]{2,}/", $_POST["prenom"]))
    {
        $erreur['prenom'] = "Votre prenom doit être composé de 2 caractère au minimum";
    }
    if (!preg_match("/[a-zA-Z -]{2,}/", $_POST["pseudo"]))
    {
        $erreur['pseudo'] = "Votre pseudo doit être composé de 2 caractère au minimum";
    }
    if (!preg_match('#^([\w\.-]+)@([\w\.-]+)(\.[a-z]{2,4})$#', $_POST["adresse"]))
    {
        $erreur['adresse'] = "Rentrez une adresse valide";
    }
    if (!preg_match('#^([\w\.-]+)@([\w\.-]+)(\.[a-z]{2,4})$#', $_POST["adresse2"]))
    {
        $erreur['adresse2'] = "Rentrez une adresse valide";
    }
    if (!preg_match("/[a-zA-Z -]{2,}/", $_POST["mdp"]))
    {
        $erreur['mdp'] = "Votre mot de passe doit être composé de 2 caractère au minimum";
    }
    if (!preg_match("/[a-zA-Z -]{2,}/", $_POST["mdp2"]))
    {
        $erreur['mdp2'] = "Votre mot de passe doit être composé de 2 caractère au minimum";
    }

    //si les champs erreur sont vide
    if (!isset($erreur['nom']) && !isset($erreur['prenom']) && !isset($erreur['pseudo']) && !isset($erreur['adresse']) && !isset($erreur['adresse2']) && !isset($erreur['mdp']) && !isset($erreur['mdp2']))
    {

        // si le champs texte du mot de passe est egale au champs text de la confirmation du mot de passe
        // idem avec les champs texte adresse
        if ($_POST['mdp'] = $_POST['mdp2'] AND $_POST['adresse'] = $_POST['adresse2'])
        {
            // alors j'insert dans la base de données les informations (nom, prenom, pseudo, adresse, mot de passe)
            $bdd->exec('INSERT INTO connection (Nom, Prenom, Pseudo, Email, Password) VALUES("'.$_POST ['nom'].'","'.$_POST ['prenom'].'","'.$_POST ['pseudo'].'","'.$_POST ['adresse'].'","'.$_POST ['mdp'].'")');
            echo "Vous voici enregistrer";//renvoie vers la page d'accueil
        }
    }
}
?>
<!DOCTYPE html>
<html>

    <?php include ("head.php"); ?>

    <body>
      <div id="principal">
        <header>
            <a class="img" href="index.php"><img src="images/home_1.png" /></a>
            <span class="titre"> <a href="#"> DATAQUE </a></span>
            <span class="stitre"> <a href="#">&#8658; Information sur les bases de données et son application <br/> dans le datascientisme </a></span>
            <img class="img2" src="images/classeur.png" />
        </header>

        <nav>
            <?php include ("menu.php"); ?>
        </nav>

        <div id="textbdd">
          <div id="wrapper">
              <div id="one">
                  <div id="oneIn"> <!-- paragraphe principal -->
                      <div id="sommaire" style="display:;">
                          <ol style="list-style-type:upper-roman;">
                              <li><a href="#niveaa">Présentation</a></li>
                                  <ol style="list-style-type:arabic-numbers;">

                                      <li><a href="#niveab">Qu'est ce qu'une base de données ?</a></li>
                                          <ol style="list-style-type:arabic-numbers;">
                                              <li><a href="#niveaba">Définition</a></li>
                                              <li><a href="#niveabb">Les bases de données à travers le temps</a></li>
                                          </ol>
                                      <li><a href="#niveac">Structure et Fonctionnement des Bases de données</a></li>
                                          <ol style="list-style-type:arabic-numbers;">
                                              <li><a href="#niveaca">Différentes structure de base de données</a></li>
                                              <li><a href="#niveacb">Fonctionnement de système de gestion de base de donnée</a></li>
                                          </ol>
                                      <li><a href="#nivead">Les bases de données au coeur de notre avenir</a></li>
                                      <ol style="list-style-type:arabic-numbers;">
                                          <li><a href="#niveada">Définition du <cite>« big DATA »</cite></a></li>
                                          <li><a href="#niveadb">Principes du <cite>« big DATA »</cite></a></li>
                                      </ol>
                                      <li><a href="#niveae">Conclusion</a></li>
                                  </ol>
                              <li><a href="#nivebb">Exploitation</a></li>
                                  <ol style="list-style-type:arabic-numbers;">
                                      <li><a href="#nivebba">Comment gagnent ils  des millions grace à  VOS données ?</a></li>
                                          <ol style="list-style-type:arabic-numbers;">
                                              <li><a href="#nivebbb">Comment obtiennent-t'ils vos données</a></li>
                                              <li><a href="#nivebbc">Qui et Comment gagnent-ils  autant d'argent ?</a></li>
                                              <li><a href="#nivebbd">Comment sont utilisées vos données</a></li>
                                          </ol>
                                      <li><a  href="#nivebbe">Politique : Comment barack Obama a t il truqué les elections</a></li>
                                  </ol>
                              <li><a href="#nivebbbb">Cours php + MySql</a></li>
                          </ol>
                      </div>
                      <p id="niveaa">Partie I Présentaion</p>

                      <p><cite>Les bases de données ont permis une nouvelle vision de la gestion et du stockage de données dans notre societé</cite></p>
                      <img class="img6" title="" src="images/Serveur_donnees.jpg"/>
                      <p class="niva" id="niveab"> 1 Qu'est ce qu'une base de données ?</p>
                      <p class="nivb" id="niveaba"> 1.1 Définition</p>
                      <p>Une base de données ,<cite>« data base »</cite> en anglais, est un ensemble structuré dans laquelle il est possible de stocker une  quantité variable de données. Ces données doivent être facilement accessible,exploitable, utilisable par des programmes mais aussi par des utilisateurs différents. Ainsi, la notion de base de données est généralement associé à celle  de réseau, afin de pouvoir mettre en commun ces informations, d'où le nom de base on parle alors souvent de système d'information ou encore système de base de données pour représenter toute la structure regroupant les moyens pour gérer et partager les données. Cette structure comporte souvent un logiciel moteur,que l'on appelle systeme de gestion de base de données et qui permet de manipuler le contenu des bases de données comme par exemple, rechercher, ajouter ou supprimer des enregistrements.</p>
                      <img class="img5" title="Représentation du système d'information" src="images/Structure_base.gif"/>
                      <p class="nivb" id="niveabb"> 1.2 Les bases de données à travers le temps</p>
                      <p>On commence bien évidemment par les disques durs , qui ont été inventés en 1956. Cette  invention à permis d'utiliser des ordinateurs pour collecter, classer et stocker de grandes quantités d'informations. Le terme de <cite>« Data base »</cite> c'est à dire  base données à fait son apparition en 1964 pour définir la collection d'informations partagées par différents utilisateurs. Ces bases ont ensuite été évolué comme on peut le voir ci-dessous, sachant que les différents noms de structures seront définies dans la prochaine partie : </p>
                      <p>-1960 : Utilisation des systèmes de gestion de fichiers plus ou moins sophistiqués donc des systèmes de gestion plus ou moins sophistiqués.
                      <p>-1970 : Apparition les première base de données hiérarchiques et réseaux.
                      <p>-1980 : Apparition des bases de données relationnelles sur le marché.
                      <p>-1990 : Modèles relationnels dominant le marché et  apparition des premières bases de données objet-relationnel, utilise le modèle relationnelle précédent mais permet en plus de stocker des objet. L'objet est tout simplement une structure de données valus et cachés qui répond à un ensemble de message.
                      <p class="niva" id="niveac">  2 Structure et fonctionnement des bases de données</p>
                      <p class="nivb" id="niveaca">  2.1 Différentes structure de base de données</p>
                      <p>Une base de données permet donc de stocker différentes données, mais en ce qui concerne le contrôle et l'accessibilité de ces données il s'agit d'une autre paire de manches. Le besoin d'un système de gestion de données s'est fait ressentir rapidement. On compte aujourd'hui 11 structures différentes de systèmes de gestions de base de données, mais nous en retiendront 5 qui sont les plus importantes. Les SGBD permettent chacun de représenter différemment les données qu'elle contient :</p>
                      <p>Système de gestion de base de données hiérarchique : Les données sont classé hiérarchiquement, selon une arborescence descendante. L'inconvénient de ce système c'est qu'il faut connaître le chemin pour accéder au fichier ou encore sans écrire de programme.</p>
                      <img class="img5" title="" src="images/model_hierarchique.gif"/>
                      <p>Système de gestion de base de données réseau : Il s'agit d'un modèle qui prend la même structure que le modèle hiérarchique mais l'arborescence n'est plus forcement descendante.</p>
                      <img class="img5" title="" src="images/model_reseau.gif"/>
                      <p>Système de gestion de base de données relationnel : Dans ce modèle les informations sont stockées dans des tableaux à deux dimension c'est à dire lignes et colonnes, sans s'occuper de la façon dont les informations vontre être stockées. Un ensemble de données est donc modélisé par un ensemble de tables.</p>
                      <img class="img5" title="" src="images/model_relationel.gif"/>
                      <p>Système de base de données déductif : Modèle qui représente sous forme de table les données, mais leurs manipulation se fait par des calculs de déduction.</p>
                      <p>Système de gestion de base de données d'objet : Les données sont stockés sous formes d'objet, structure appelées classes.</p>
                      <img class="img5" title="" src="images/model_objet.gif"/>
                      <p class="nivb" id="niveacb"> 2.2 Fonctionnement de système de gestion de base de données</p>
                      <p>Le sujet est en réalité très vaste nous allons vois ici les points les plus importants sur lequel repose le bon  fonctionnement des bases de données. Un système de gestion de base de données (SGBD) permet comme vu précédement permet de créer, manipuler les données, les conserver de manière durable en s'assurant de leur cohérence et deleur fiabilité.</p>
                      <p>Le fonctionnement d'un SGBD se repose sur plusieurs points, il y a dans une premier temps la persistance des données c'est à dire le stockage d'une grande quantité de donnée. Ensuite viens la manipulation facile des données sur l'utilisation de langages différents pour être suivie par la manipulation efficace des données grâce à des structure de données qui permettent un accès rapide à un grand volume de données. Le quatrième point correspond à la  sécurité ce qui correspond aux contrôle d'accès au données, pour finir les  deux niveau d'abstraction indépendant ;</p>
                      <p>-Niveau logique : acceptation d'un modèle de données et possibilité de définir des shémas.
                      <p>-Niveau physique : stockage, structure de données adaptés aux accès efficaces.
                      <p>Pour pouvoir accéder, lire, modifier ou encore supprimer  ces données , il faut envoyer des requêtes au serveur, le traitement de ces requêtes fonctionne de cette manière :</p>
                      <p>-Analyse lexicale et syntaxique : vérification de la syntaxe de la requête entrée.</p>
                      <p>-Analyse sémantique et construction de l'arbre représentant l'expression algébrique de la requête.</p>
                      <p>-Représentation algébrique qui est appelée "plan logique" de la requête.</p>
                      <p>-Génération d'un plan physique d'exécution a partir du plan physique.</p>
                      <p>-Exécution du plan physique par le moteur d'exécution des requêtes.</p>
                      <p class="niva" id="nivead"> 3 Les bases de données au coeur de notre avenir</p>
                      <p>Aujourd'hui, suite à l'exposition du numérique , notamment grâce l'e-commerce , la démocratisation de la connectivité mobile et donc multiplication des objets connectées. Les géants de ce domaine collectent des quantités gigantesques de données. En 2013 l'humanité à stocké plus de 2000 milliards de Go de données numériques nouvelles. Et 3/4 de ces données ont été créées par les consommateurs. L'homme à donc crée la societé de l'information , ou les données deviennent petit à petit la matière première de notre societé, des données que l'ont appelle le pétrole du XXIème siècle. Nous allons donc vous parler du <cite>« Big Data »</cite> un phénomène nouveau qui concerne les base de données.</p>
                      <p class="nivb" id="niveada"> 3.1 Définition du <cite>« big DATA »</cite></p>
                      <p>Lorsque vous envoyer un mail, lorsque vous effectuer des achats avec votre carte bancaire ou encore que vous passez devant des caméras, vous crées des données numériques. Le <cite>« big DATA »</cite> c'est cette explosion de donnée mais aussi l'évolution technologique qui permet de les analyser et de traiter les données afin d'en tiré une valeur ajouté.</p>
                      <p class="nib" id="niveadb"> 3.2 Principes du <cite>« big DATA »</cite> </p>
                      <p>Pour décrire le principe du Big Data, il est coutumier de résumer ses caractéristiques majeures en utilisant 3 lettres "V" : </p>
                      <p><cite>« Volume, Velocity, Variety »</cite>.</p>
                      <img class="img5" title="" src="images/Principe.jpg"/>
                      <p>Volume : La quantité de donnée généré est en pleine expansion, les commerces électroniques et les réseaux sont les plus grands contributeurs de cette explosion. Un exemple pour les réseaux sociaux, Google traite quotidiennement 27 millions de Gb de données, ou encore la compagnie Zynga qui à developpé le jeu <cite>« Farmville »</cite> ou encore <cite>« Mafia War »</cite> traite 1 million de  gb  de données par jour.Les prévision disent qu'en 2020, <cite>40 000 milliards »</cite> de Gb de données auront été crées par l'humanité.</p>
                      <p>Vélocité :  La vélocité correspond à la fréquence à laquelle  les données sont crée ,analysé,stocker et mises à jour. Ce flux croissant est aujourd'hui analyser en temps  réel , on parle alors instantanéité  d'émission et de réception de ces gros volume de données. Une vitesse qui ne cesse d'augmenter au fur et à mesure des années aujourd'hui la donnée est analysé en temps réel on parle alors d'instantanéité.</p>
                      <p>Variété : Et pour finir la variété , Les bases de données spécialisées sont en mesure de gérer la multiplicité des formats des données : numérique, texte, image...</p>
                      <p class="niva" id="niveae"> 4 Conclusion </p>
                      <p>Il y a donc derrière chaque base de données un système d'information , mais aussi un système de gestion pour nous permettre la facilité de l'accès et de la gestion de ces base de données. On comprend aujourd'hui que l'évolution de ces moyens technologique est une nécessité pour notre monde et notre société. Une société, ou les données sont au centre de notre actualité numérique.</p><br><br><br><br>

                      <p id="nivebb">Partie II Exploitation</p>
                      <img class="img6" src="images/politique.jpg"/>
                      <p class="niva" id="nivebba"> 1 Comment gagnent ils  des millions grace à  VOS données ?</p>
                      <p>300 milliards de données stocker en 2013, 600 milliards de dollars dépenser en marketing la même année , avec un marché des données personnelles pesent plus de 300milliard de dollars autant d'exemple pour illustre la place des données dans le marketing . Le marketing peut se définir en deux règles simples  premièrement  l'analyse des besoins du consommateurs  et deuxièmement l'ensemble des moyens utilisés pour influer le client. La jonction entre données et marketing peut paraître complexe à première vue . Quelle lien existe t-il entre le traitement des données et le marketing . Tous d'abord dans une première sous partie nous étudierons l'origine des données d’où elles viennent, ensuite dans la deuxième nous analyserons les principaux  acteurs du marché et pour  nous examinerons les forces et limites des données.</p>
                      <p class="nivb" id="nivebbb"> 1.1 Comment obtiennent-t'ils vos données<p>
                      <p>80% des données du Big data proviennent de ces quatre sociétés, Apple Facebook, Amazon et Google . Le reste provient de formulaire, service sur internet, logiciels que vous autorisés et qui utilisent vos données. Le but d'une entreprise étant de faire du profit , pourquoi alors certaines entreprise comme Facebook  propose t-ils leurs services gratuitement? En faite ce n'est pas gratuits vous êtes leurs sources de profit. Quand  vous utilisez un service gratuitement sur le web, en réalité c'est vous qui êtes le produit. Prenons comme exemple les cartes de fidélités, cette dernière est adorées des français, neuf français sur dix en possèdent une avec une moyenne de dix cartes par personnes. Ces cartes offertes par les entreprises , leurs permet de connaître exactement ce que vous consommer. La carte de fidélité peut être comparer à un pacte avec le diable  où pour quelques avantages supplémentaires vous permettez l'accès à vos données. Le Big data nous connais mieux que nous même. Historique des achats, de vos déplacements grâce à la géolocalisation de votre téléphone  etc..</p>
                      <p class="nivb" id="nivebbc"> 1.2 Qui et Comment gagnent-ils  autant d'argent ?</p>
                      <p>Que vaut une donnée sur le marché ? Ils faut compter 0,15€ pour votre nom, prénom, 0,45€ pour l’adresse postal, 0,30€ pour le nombre d'enfant ou encore 0,10€ pour votre poids. En tous un européen vaut 600€ de données. Si vous multipliez ce chiffre par le nombre d’européens vous comprenez tous l’enjeu de posséder des données. Qui vends les données ? Acxion une société inconnue du grand public et le leader mondial de ce marché. Avec 1,1 Milliards de dollars de chiffres d'affaire et plus de 700 millions de personnes fichées dans leurs bases de données. En France la Poste est l'acteur principal de la vente de données avec son service spécialisée Mediaposte. Ce service possède plus de 40 millions d'adresses postales , 16 millions d’adresses Mail et 19 millions de numéros téléphone. Pour fournir tous ses clients la Poste utilise aussi des bases de données  qui appartiennent à d'autre entreprises spécialisées dans ce secteur. Comme par exemple Assurland, le Linx, ou encore plus surprenants, des associations comme Unicef ou Village d'enfant. Comment s'organisent le marché ? Imaginez la requête suivante ''200 000 personnes qui voulant acheter une voiture dans les 3 mois à venir et qui ont une famille avec enfants'' Si 20 000 données de personne viens de la bases de données d'Assureland, il y a alors un échange financier entre Mediaposte et Assurland . Une requête de ce type et gérée en 15 minutes par Mediaposte.</p>
                      <p class="nivb" id="nivebbd"> 1.3 Comment sont utilisées vos données</p>
                      <p>On dénombre déjà plus de 15 millions d'objets connectés dans le monde, en 2050 il y en aura plus de 50 millions. La société d'assurance AXA offre un bracelet électronique à ses clients, ce bracelet permet de mesurer  le nombre de calories perdus, le nombre de pas, le rythme cardiaque ou encore le taux d’oxygène dans le sang. L'avantage pour le client de porter le bracelet est qu'il obtient une ristourne  de 100€ sur ses frais d'assurance, si il fais plus de 10 000 pas par jour. Pourquoi récompenser ses assurées? Un assurer en bonne santé, c'est un assureur comblée. Il est donc normal que le client soit récompenser car il est sujet à moins de risque et donc coûte moins chère à l'assureur.</p>
                      <p>Carrefour possède la plus grande bases de données de toute les grandes distributions. À l'aide des cartes de fidélités et l' analyse de la consommation des consommateurs, Carrefour peut déterminer des informations très personnelles de ses clients et donc de mieux satisfaire leurs besoins. Par exemple, si l'on remarque que l'acheteur est une femme et que sa consommation d'alcool à diminuée ces derniers mois nous pouvons en déduire qu'elle est enceinte et lui proposer d' hors et déjà des produis pour sont futur enfant. Le risque que la publicité soit trop ciblée et de rentrer dans l'intimité du consommateur est imminent et donc produit l'effet inverse, ils rebutent le consommateur. Carrefour voulait faire de la pub pour un produit permettant de lutter contre les fuites urinaire, la possibilité de déterminer les personnes atteintes de fuite urinaire était techniquement possible. Il suffisait de corréler les informations suivantes ''achat de lingette, l'age et présence d'une fille ou non à la maison''. Mais cette possibilité n'a pas été réalisé car elle aurait été trop invasif pour le consommateur.</p>
                      <p class="niva" id="nivebbe"> 2. Politique : Comment barack Obama a t il truqué les elections ! <p>
                          <img class="img6" src="images/obama.jpg"/>
                      <p>Grâce aux données  américaines, les équipes du président américain Barack Obama pour les élections de 2012 ont influé le cours de l'histoire.
                      En utilisant le Big Data, le parti démocrate à mieux cibler les "indécis" pour s'assurer d'obtenir leurs votes.
                      Cette étude des données leur à permis à permis d'éviter une augmentation des votes pour le parti républicain.
                      Comment les équipes de l'actuel président américain se sont ils pris pour gagner les élections ?
                      L'analyse de tous les réseaux sociaux, à permis un ciblage des votants pour le parti de Barack Obama pour  leurs proposer d'effectuer des dons afin de soutenir le parti en question.
                      Sans négliger le fait que  la campagne très agressive de l'équipe de Barack Obama à aussi permit ce miracle.
                      Ville par ville, quartier par quartier, maison par maison, les détracteurs étaient présent et grâce à l’utilisation du Big data et donc les données de géolocalisation, leurs déplacements étais optimisés permettant de ne pas se confronter aux voteurs républicain.
                      Cette façon de faire est un succès, 2012 marque la première campagne de l'histoire remportée grâce au big Data. Dans les 1 milliards de données récoltées pour la campagne d’Obama, 70% venais des dons en ligne.
                      Cette méthode est d'ailleurs déjà utilisée en France, notamment par le Partie Socialise en 2012 qui à utilisé cette technique à moins grande échelle mais elle leur à permis de faire voter un quatorzième des abstentionnistes. Mais dans ce cas là, les données des réseaux sociaux n’ont pas été utilisés. Les prochaines élections à venir vont sans doute dépendre de la meilleure et optimale façon d'utiliser le Big data.</p><br><br><br><br>
                      <p id="nivebbbb">Partie III Tutoriel php + MySql</p><br><br>
                      <img src="images/tut.png">
                      <p>Le code si dessous permet de créé un champ de saisit texte pour demander le nom.<br>
                          Bien sur ce code est un peu plus poussé.<br>
                          Le "type" et le "name" sont obligatoire. Le "placeholder" est facultatife. C'est se que vous voyer dans le champ de saisit.<br>
                          Le value, ici est très avancé. C'est pour garder ce que l'utilisateur écrit si il na pas fait de faute.</p><br>
                      <p>Je viens de vous parler de fautes, voici comment procéder.</p>
                      <img src="images/tut2.png">
                      <p>Si dans le champ saisit il y a une faute, on met un message d'erreur dans une variable.<br>
                          Vous retrouvez bien cette varible dans l'explication précédente.</p>
                      <p>Ainsi de suite pour les différents champs que vous voulez mettre dans votre formulaire.</p>
                      <p>Avec un bouton qui valide le formulaire.</p>
                      <img src="images/tut3.png">
                      <p>Voici se que ca peu donner. Vous pouvez essayer pour bien vous rendre compte.</p>
                      <legend>Nous avons besoin de vos informations</legend><br>
                      <!-- formulaire d'inscription -->
                      <form method="post" action="">
                          <!-- champs text "nom"  si la valeur du champs texte "nom" est non vide et si l'erreur est vide alors on laisse le nom de l'utilisateur inscrit dans le champ-->
                          <label>Nom <input type"text" name="nom" placeholder="nom"
                              value="<?php if(isset($donnees['nom'])) echo $donnees['nom']; ?>" >
                              <?php if(isset($erreur['nom']))echo $erreur['nom'];?></label><br>


                          <!-- champs text "prenom"  si la valeur du champs texte "prenom" est non vide et si l'erreur est vide alors on laisse le prenom de l'utilisateur inscrit dans le champ-->
                          <label>Prenom <input type"text" name="prenom" placeholder="prenom"
                              value="<?php if(isset($donnees['prenom'])) echo $donnees['prenom']; ?>" >
                              <?php if(isset($erreur['prenom']))echo $erreur['prenom'];?></label><br>

                          <!-- champs text "pseudo"  si la valeur du champs texte "pseudo" est non vide et si l'erreur est vide alors on laisse le pseudo de l'utilisateur inscrit dans le champ-->
                          <label>Pseudo <input type"text" name="pseudo" placeholder="pseudo"
                              value="<?php if(isset($donnees['pseudo'])) echo $donnees['pseudo']; ?>" >
                              <?php if(isset($erreur['pseudo']))echo $erreur['pseudo'];?></label><br>

                          <!-- champs text "adresse"  si la valeur du champs texte "adresse" est non vide et si l'erreur est vide alors on laisse l'adresse de l'utilisateur inscrit dans le champ-->
                          <label>Adresse <input type"text" name="adresse" placeholder="adresse"
                              value="<?php if(isset($donnees['adresse'])) echo $donnees['adresse']; ?>" >
                              <?php if(isset($erreur['adresse']))echo $erreur['adresse'];?></label><br>

                          <!-- champs texte adresse2 -->
                          <label>Confirmation <input type"text" name="adresse2" placeholder="confirmez votre adresse"
                              value="<?php if(isset($donnees['adresse2'])) echo $donnees['adresse2']; ?>" >
                              <?php if(isset($erreur['adresse2']))echo $erreur['adresse2'];?></label><br>

                          <!-- champs text "mot de passe"  si la valeur du champs texte "mot de passe" est non vide et si l'erreur est vide alors on laisse le mot de passe de l'utilisateur inscrit dans le champ-->
                          <label>mot de passe <input type"text" name="mdp" placeholder="mdp"
                              value="<?php if(isset($donnees['mdp'])) echo $donnees['mdp']; ?>" >
                              <?php if(isset($erreur['mdp']))echo $erreur['mdp'];?></label><br>

                          <!-- champs texte mot de passe2 -->
                          <label>Confirmation <input type"text" name="mdp2" size="22" placeholder="comfirmez votre mot de passe"
                              value="<?php if(isset($donnees['mdp2'])) echo $donnees['mdp2']; ?>" >
                              <?php if(isset($erreur['mdp2']))echo $erreur['mdp2'];?></label><br>

                          <!--boutton de type submit qui valide le formulaire-->
                          <input TYPE="submit" NAME="OK" VALUE=" Valider "><br>

                      </form>
                      <p>Maintenent que votre formulaire est prés rentrons dans le vif du sujet.<br>
                          Comment interagir avec votre base de données personelle en local.<br>
                          Pour se tutoriel il est préférable d'utiliser WAMP sous windows avec phpmyadmin comme se que j'ai fait.</p>
                      <img src="images/tut5.png">
                      <img src="images/tut4.png">
                      <p>Ici, ma base de données personelle(projet_tut). Ma table se nomme "connection". Et à droite se qu'il y a dedans.<br>
                          Maintenant que votre base est prête, on va pouvoir commencer.</p>
                      <p>Pour pouvoir intéragir avec, il vous faut un script précis.</p>
                      <img src="images/tut64.png">
                      <p>Remplacer mes coordonnées par les votre bien sur.<br>De base, pour vous connecter sur phpmyadmin le nom d'utilisateur est root et sans mot de passe.</p>
                      <p>Ensuite nous voila ou vous voulez en venir.<br>
                          Si vous avez respecter toute les étapes si dessus tout devrais bien se passer.<br>
                          Voila se qu'on appele une requète SQL.<br></p>
                      <img src="images/tut7.png">
                      <p>Elle permet d'affiche toute les données dans la table "connection".<br>
                          Maintenant allons plus loin<br>
                          Voici comment procéder pour mettre les informations qu'a entré l'utilisateur dans le formulaire.</p>
                      <img src="images/tut8.png">
                      <p>Si part exemple vous entrez sa :</p>
                      <img src="images/ress.png">
                      <br>Voila le resultat<br>
                      <img src="images/res.png">
                      <p>Et voila vous avez tout pour réussir votre propre base de données.<br>
                          Merci d'avoir suivit se tutoriel.</p>
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
