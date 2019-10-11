# symbnb

Application pouvant servir:
 - aux voyageurs, afin de trouver un bien pour se loger durant leur séjour.
 - aux propriétaires de biens, afin de louer leur appartement ou maison à des voyageurs.
 
Languages de programation utilisé:
  - php
  - javascript
  - twig
  
Framework utilisé: Symfony 4.1.6
Base de donnée: MySQL

INSTALLATION:
- cloner le projet
- installer les dépendances avec composer install
- configurez votre base de donnée dans le fichier .env
- lancer les migrations en tapant : php bin/console doctrine:migrations:migrate
- lancez les fixtures en tapant : php bin/console doctrine:fixtures:load
- lancez le serveur en tapant : php bin/console server:run
