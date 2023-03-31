# test_web
#Test Web
Ceci est un projet Symfony pour un test technique. Il s'agit d'une application web qui permet ;
*récupérer des commandes depuis une API
effectuer des traitements sur ces commandes 
renvoyer un fichier .CSV en réponse

#Configuration
Avant de pouvoir exécuter l'application, vous devez effectuer les étapes suivantes :

Créer une base de données MySQL nommée "test_web".
Copier le dossier du projet dans le répertoire "htdocs" de votre serveur Web local (par exemple, XAMPP).
Exécuter la commande "composer install" pour installer les dépendances du projet.
Exécuter la commande "php bin/console make:migration" pour générer les migrations Symfony pour la table "orders".
Exécuter la commande "php bin/console doctrine:migrations:migrate" pour exécuter les migrations et créer la table "orders" dans la base de données.
Utilisation
Pour exécuter l'application, vous pouvez utiliser l'une des commandes suivantes :

"symfony server:start" pour démarrer le serveur Symfony intégré.
"php -S 127.0.0.1:8080" pour démarrer un serveur Web PHP intégré.
Une fois que le serveur est en cours d'exécution, vous pouvez accéder à l'application en ouvrant le lien "http://127.0.0.1:8000/orders" dans votre navigateur.

Fichier SQL
Le fichier SQL contenant des données pour les tables SQL

Auteur
Ce projet a été créé par Nader Mathlouthi.
