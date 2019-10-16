<!DOCTYPE html>
<html>
    <head>
        <title>À propos</title>
    </head>
    <body>
        <p>
            <h1>À propos</h1>
            <br>
            <h3>Ioana Grecu</h3>
            <h3>Applications Internet (4205B7MO - Automne 2019)</h3>
            <h3>Automne 2018, Collège Montmorency.</h3>
        </p>
        <br>
        <hr noshade >
        <p>
            <h4>Remise du lien sur GitHub et page À propos : </h4>
            Le TP1 est sur GitHub et la page À propos est faite.
            <br><br>
        </p>    
        <p>
            <h4>BD avec hasMany (1-n) et belongsToMany (n-n) : </h4>
            La BD contient un hasMany (1-n) et  un belongsToMany (n-n)
            <br><br>
        </p>    
        <p>
            <h4>Cake bake pour 5 tables + validations : </h4>
            Cake bake et validations fonctionnel pour : Products,Reviews,Users,Tags et Files
            <br><br>
        </p>
        <p>
            <h4>Actions en menu pour trois types d'utilisateurs : </h4>
            Il y a trois type d'utilisateur : Admin, Supervior et Employer.
            Ils ont tous des droits differents. 
            <br><br>
        </p>
        <p>
            <h4>Élément Menu avec infos sur l'utilisateur / terminer : </h4>
            Un éléments Menu est afficher en haut a gauche pour consuter les informations de la utilisateur connecter. 
            <br><br>
        </p>
        <p>
            <h4>Traduction i18n en français et 3ième langue : </h4>
            Traduction fonctionnel en Francais et en Roumain. 
            <br><br>
        </p>
        <p>
            <h4>Gestion multilingue du contenu de la BD : </h4>
            Traduction fonctionnel en Francais et en Roumain dans l'affchage de la BD
            <br><br>
        </p>
        <p>
            <h4>Téléversement et affichage d'images liées : </h4>
            Téléversement et affichage d'images liées fonctionnel dans la table Files avec phpMyAdmin. 
            Avec SQLite, l'affichage des images est fonctionnel mais le téléversement non puisque la table files_products n'a pas de clé primaire. Pourtant elle est présente dans phpMyAdmin.  
            <br><br>
        </p>
        <p>
            <h4>Envoi d'un courriel de confirmation avec UUID : </h4>
            Envoi d'un courriel de confirmation avec UUID est fonctionnel. 
            Le lien de confirmation dirige l'utilisateur dans l'application mais la valeur active dans la table Users ne change pas. 
            <br><br>
        </p>
        <p>
            <h4>Utlisation de Migrations et de SQLite : </h4>
            L'application fonctionne avec Migrations et SQLite.
            <br><br>
        </p>
        <p><h3><a href="http://www.databaseanswers.org/data_models/dell_computer_sales/index.htm">Lien BD</a></h3></p>
        <img src="webroot/img/bd.jpg" width="600" height="600">
        <br>
        <br>
        <br>
        <p><h3><?php echo $this->Html->link('Back', ['controller' => 'products']); ?></h3></p>
        <br>
        <br>
        <br>

    </body>
</html>
