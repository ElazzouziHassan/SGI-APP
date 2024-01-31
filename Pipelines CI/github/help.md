
## Ce fichier de workflow GitHub Actions comprend deux jobs:

## **1 - build:**

- Déclenché à chaque push sur la branche main.
- Checkout du code source.
- Configuration de Node.js.
- Installation des dépendances.
- Exécution des tests.

## **2 - deploy:**

- Déclenché après la réussite du job build.
- Checkout du code source.
- Configuration de Node.js.
- Installation des dépendances.
- Déploiement sur la production.