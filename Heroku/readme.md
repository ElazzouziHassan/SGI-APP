# déployer une application sur Heroku :

Pour déployer une application sur Heroku, suivez ces étapes générales :

## **Créer un compte Heroku**: 
le site web d'Heroku (https://www.heroku.com/).

## **Installer le client Heroku** : 
Téléchargez et installez le client Heroku sur : https://devcenter.heroku.com/articles/heroku-cli

## **Se connecter à Heroku** : 
Ouvrez un terminal et exécutez `heroku login` pour vous connecter à votre compte Heroku.

## **Initialiser un référentiel Git** : 
Si ce n'est pas déjà fait, initialisez un référentiel Git dans votre projet avec `git init`.

## **Créer un fichier Procfile**: 
Heroku utilise un fichier nommé `Procfile` pour décrire les processus qui doivent être exécutés sur le serveur. Assurez-vous d'avoir un Procfile dans la racine de votre projet. 

Par exemple :
- pour une application Laravel, le contenu pourrait être :

```bash
web: vendor/bin/heroku-php-apache2 public/
```
- pour une application Angular :

```bash
web: npm start
```

## **Ajouter et valider les fichiers** : 

- Ajoutez les fichiers à Git `git add .`, 
- faites un commit `git commit -m "Initial commit"`

assurez-vous que vous avez une branche principale `main`.

## **Créer une application Heroku** : 
Exécutez `heroku create` pour créer une nouvelle application Heroku. Cela ajoutera également un dépôt distant Heroku à votre configuration Git.

## **Déployer sur Heroku** : 
Exécutez `git push heroku main` 
*remplacez main par le nom de votre branche si nécessaire* pour déployer votre application sur Heroku.

## **Ouvrir l'application** : 
Après le déploiement, Heroku fournira un lien vers votre application. Vous pouvez également l'ouvrir automatiquement en exécutant `heroku open` dans le terminal.