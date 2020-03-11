# Custom Slim skeleton

Squelette d'application Slim 4 avec dépendances prêtes à l'emploi.

- Doctrine ORM
- Slim Basic Auth
- Application ReactJS (branche reactjs)
- Templating via Twig (branche twig)

## Install the Application

* Cloner le dépot (`git clone`)
* Installer les dépendances php (`composer install`)
* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writable.

## Developpement
To run the application in development, you can run these commands 

** Lancer le serveur php **
```composer start```

** Lancer le serveur webpack** (pour l'app React)
```composer start-npm```
