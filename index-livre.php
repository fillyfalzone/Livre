<h1> Exercice Livre</h1>
<p>
Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer <br>des livres et
leurs auteurs respectifs.<br>
Les livres sont caractérisés par un titre, un nombre de pages, une année de <br>parution, un prix et un
auteur. Un auteur comporte un nom et un prénom.<br>
Une méthode toString() sera appréciée dans chacune de vos classes.<br>
Vous implémenterez une méthode afficherBibliographie() qui permettra <br>d’afficher la bibliographie
complète d’un auteur :
</p>

<?php
    require_once 'book.php';
    require_once 'autor.php';

    $autor1 = new autor("Bryan", "KINGSTON");
    $autor2 = new autor("Pierre", "VACHET");


    $book1 = new book("Les Anges", 250, "1973", 12,$autor1);
    echo '<br> <br>';
    $book2 = new book("Le vent", 150, "1998", 5,$autor1);
    $book3 = new book("Hello france", 350, "2015", 3,$autor1);

    $autor1->autorBibliography();
    echo '<br> <br>';
    echo $book2;

?>