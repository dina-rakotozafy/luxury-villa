# Luxury villa

- Cloner le projet 
```
git clone git@github.com:dina-rakotozafy/luxury-villa.git
cd luxury-villa
```

- Dans la racine du projet, dupliquer le fichier **.env**, puis renommer le nouveau fichier en **.env.local**
- Dans .env.local, sur la partie ***doctrine/doctrine-bundle***, décommentez la partie qui correspond à votre base de donnée. Y mettre le nom d'utilisateur, mot de passe et nom de la base de donnée.

- Installer les dépendances
```
composer install
```

- Lancer les migrations (Avant, assurer d'avoir créer la base de donnée, et importer le fichier *.sql)
```
php bin/console doctrine:migration:migrate
```

- Lancer le serveur pour voir le site dans un navigateur
```
symfony server:start
```
