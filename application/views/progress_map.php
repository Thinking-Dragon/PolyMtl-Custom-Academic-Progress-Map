<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carte du cheminement</title>
</head>
<body>
    Carte du cheminement.
    <table>
        <tr>
            <th>Sigle</th>
            <th>Nom</th>
            <th>Crédits</th>
        </tr>
        <?php foreach($courses as $course): ?>
            <tr>
                <td><?= $course->sigle ?></td>
                <td><?= $course->name ?></td>
                <td><?= $course->credits ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>