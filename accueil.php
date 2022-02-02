<?php
include_once('commun.inc.php');
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <title>Accueil</title>
    <style>
        table {
            border-collapse: collapse;
        }

        table,
        td,
        th {
            border: 1px solid black;
        }

        td,
        th {
            padding: 4px;
        }
    </style>
</head>

<body>
    <div>
        <!-- Afficher le tableau des auteurs. -->
        <table>
            <tr>
                <th>Auteurs</th>
            </tr>
            <?php foreach ($auteurs as $numero => $auteur) : ?>
                <h2><?= $auteur ?></h2>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>