## Dans ce fichier .gitlab-ci.yml :

- La phase test est responsable de l'exécution des tests unitaires avec PHPUnit.
- La phase deploy déploie automatiquement votre application sur un serveur distant. 

Cet exemple utilise Docker pour créer une image et la pousser vers un registre, puis déployer cette image sur le serveur distant via SSH.