
<?php
require_once './Materiel.php';

//Récupération de la liste de tous les matériels en utilisant la méthode statique getMateriel()
$listeMateriel = Materiel::getMateriel();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
            table, td{
                border: solid 1px;
            }
        </style>
    </head>
    <body background='la.jpg'>

        <br> <br>

    <center>	<a href="ajoutertest.php">Ajouter Materiel</a> </center>
    <center>   <table>
            <tr>
                <th>Nom</th>
                <th>Marque</th>
                <th>Fonction</th>
            </tr>
            <?php
            foreach ($listeMateriel as $materiel) {
                echo '<tr>';

                echo '<td>';
                echo $materiel['nom'];
                echo '</td>';

                echo '<td>';
                echo $materiel['marque'];
                echo '</td>';

                echo '<td>';
                echo $materiel['fonction'];
                echo '</td>';

                echo '<td>';
                echo '<a href="supprimer.php?id=' . $materiel['id'] . '">Supprimer</a>';
                echo ' | ';
                echo '<a href="frm_modifier.php?id=' . $materiel['id'] . '">Modifier</a>';
                echo '</td>';

                echo '</tr>';
            }
            ?>
        </table>   </center>
</body>
</html>


