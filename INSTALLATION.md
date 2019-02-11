# Déploiement du site Econnect

# Déploiement en local
## Logiciels nécessaires
Pour déployer en local sur une machine nous n’avons pas besoin d'énormément de logiciels. Nous avons principalement besoin d’une plateforme de développement web. Il contient différentes composantes, un serveur web Apache en local et PhpMyAdmin. Il faudra télécharger et installer un logiciel adapté au système d'exploitation de votre machine.

Si vous possédez un ordinateur sous windows vous pouvez installer WAMP.
Si vous possédez un ordinateur sous MacOS vous pouvez installer MAMP.
Si vous possédez un ordinateur sous Linux vous pouvez installer XAMP.
Et il vous faudra un éditeur de code comme Sublime Text.

## WAMP 3.1.4
Une fois que le logiciel est installé, il faut déposer le dossier du projet “A1-Econnect-master” complet de site web dans le dossier C:\wamp64\www de votre machine. Le site Econnect est alors disponible à cette URL [http://localhost/A1-Econnect-master/Econnect/index.php](http://localhost/Econnect/A1-Econnect/Econnect/index.php) .

Il faut maintenant paramétrer la base de données pour la relier au site web. Vous allez ouvrir “phpMyAdmin”.

On va maintenant créer une nouvelle base de donnée. Vous pouvez renseigner le nom de la base de données et vous sélectionnez l’interclassement “utf8_bin”. Vous importez le fichier “bdd_econnect_v2.sql” dans la base de données créée. Vous obtenez un message confirmant la réussite de l’importation.

## MAMP 4.1

Une fois installé le logiciel il faut déposer le dossier du projet “A1-Econnect-master” complet de site web dans le dossier C:\MAMP\htdocs de votre machine.  

 Le site Econnect est alors disponible à cette URL : “[http://localhost/A1-Econnect-master/Econnect/](http://localhost/A1-Econnect-master/Econnect/)”.

Il faut maintenant paramétrer la base de données pour la relier au site web. Vous allez ouvrir “phpMyAdmin”.


On va maintenant créer une nouvelle base de donnée. Vous pouvez renseigner le nom de la base de données et vous sélectionnez l’interclassement “utf8_bin”. Vous importez le fichier “bdd_econnect_v2.sql” dans la base de données créée. Vous obtenez un message confirmant la réussite de l’importation.

## Paramétrages
    

Pour finir le paramétrage vous devez modifier le fichier “Requete_parametre.php” situé dans le dossier Econnect/Modeles. Pour le modifier vous pouvez utiliser un éditeur de texte comme Sublime Text.

Vous devez mentionner le nom de votre base de données au niveau de la variable “dbname=”. Dans le champ “‘root’” vous indiquer votre login phpMyAdmin et dans le second champ qui est vide le mot de passe de votre phpMyadmin.

Le site Econnect est maintenant opérationnel en local.

