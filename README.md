# Big-Project

**Intitulé, contexte et descriptif du projet**
Dans ce projet, vous ferez appel à la totalité des
compétences et connaissances acquises au travers des
différents projets, ateliers et conférences vus au cours de
l’année, afin de créer une seule infrastructure complète.

**Doc technique**

**SERVER**

Installation d'ubuntu server : vers.
Link : 
type : iso

Virtualiseur : Virtual box 7.0

Settings : 
Username : osahin
mdp : *demander
Hostname : ServerUbuntu
Domain.name : myguest.virtualbox.org

enp0s3/
DHCPv4 10.0.2.15/24

server openSSH : Oui
installation supplémentaire : non

**SERVER WEB**

Choix : Apache2
installation en ligne de commande : 
sudo apt install apache2 

config : ...


**WEB PHP**

Pour l'instant seulement le formulaire de contact (provisoirement le livre d'or) est lié à une base de donnée de phpMyAdmin via Uwamp, 
qui passera surement sur mariaDB.

db_name : Big_project
username = "root"

J'initialise le php avec son fichier config.php
et je le "require" dans chaque fichier.

Dans index.php je dois faire un livre d'or donc enregistré sur ma BDD et l'afficher de nouveau, 
Pour l'enregistré j'utilise une requête SQL : 

---------

$sql = "SELECT * FROM guestbook ORDER BY id DESC LIMIT 1"; --> je met la requête SQL dans une variable

$pre = $pdo->prepare($sql);                                --> je prépare la requête

$pre->bindParam('id', $_POST['id']);                       --> je cache les id des données

$pre->execute();                                           --> j'execute

$data = $pre->fetch(PDO::FETCH_ASSOC);                     --> le plus important, ça me récupère tout de la bdd

---------

puis, sur une balise "input" on va utiliser "" name="pseudo" id="pseudo" "" pour rentrer le pseudo de la personne,
et, sur une autre balise "input" on va utiliser "" name="message" id="message" "" pour rentrer le message de la personne.

Pour afficher ce qu'il y a de ma bdd, à l'endroie où je voulais afficher le message je met le code php suivant : "" <?php echo $message ?> ""; idem pour le pseudo : "" <?php echo $pseudo ?> "" dans mon cas ce sont entre des balise <p>.
  
 













