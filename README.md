## Démarrer le projet via lando

> telecharger et installer lando et docker

> dans le terminal => lando start

## Installer les dépendances (si besoin)

> lando composer install

## cree la base de donné c

lando php bin/console doctrine:database:create

## Mettre à jour la bdd

> lando php bin/console make:migration
> lando symfony console doctrine:migrations:migrate

## Accéder à l'app

http://localhost:8080/personne/
http://localhost:8080
(cf console)

## Accéder à PHPMyAdmin

(cf console) http://base.lndo.site/

## Deploiement

> lando
> docker

## les diagrammes UML j'ai les inclus dans le fichier Word qui s'appelle uml.docx
