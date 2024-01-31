# **Docker**:

Ces fichiers Dockerfile sont basés sur des images officielles de PHP, Node.js, Composer, et Nginx. Ils définissent les étapes nécessaires pour installer les dépendances, construire l'application et configurer les serveurs PHP-FPM (Laravel) et Nginx (Angular).

## **Construction de l'image Docker**:

Exécutez la commande suivante dans le répertoire de votre projet pour construire l'image Docker.


- **pour le backend** : 
```bash
docker build -t backend
```
- **pour le frontend** : 
```bash
docker build -t frontend
```
`Assurez-vous d'avoir Docker installé sur votre machine.`

## **Exécution du Conteneur:**

Une fois l'image construite, vous pouvez lancer un conteneur avec la commande suivante.


pour le backend : 
```bash
docker run -p 8080:80 backend
```
Cela exposera votre application sur `http://localhost:8080`.

pour le frontend : 
```bash
docker run -p 4200:80 frontend
```
Cela exposera votre application sur `http://localhost:4200`.