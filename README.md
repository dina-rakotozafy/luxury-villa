# Luxury villa

- Cloner le projet

  ```
    git clone git@github.com:dina-rakotozafy/luxury-villa.git
  
    cd luxury-villa
  ```

- Ouvrir le projet dans un éditeur de code

- Dupliquer le fichier **.env** dans la racine du projet et renomme le nouveau en **.env.local**

- Décommenter la partie ***###> doctrine/doctrine-bundle ###***, a ce qui correspond à votre base de donnée.
  Configurer l'accès à la base de donnée (Nom d'utilisateur, mot de passe et nom de la base de donnée)

- Sur un terminal, naviguer sur la repertoire de votre projet. Lancer les commandes suivantes :
  
   * Installer les dépendances :
     
      ```
        composer install
      ```

  * Lancer les migrations (créer la BDD avant d'éxecuter ce commande, et importer le fichier *.sql s'il y en a) :
    
      ```
        php bin/console doctrine:migration:migrate
      ```
  * Lancer le serveur pour voir le site dans un navigateur :
      ```
        symfony server:start
      ```

