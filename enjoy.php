<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projets_php_09-04</title>
</head>
<body>
    <?php
    if (!empty($_POST['interets']) && is_array($_POST['interets'])) {
        $interets = array_map(function($val) {
            return htmlspecialchars(trim($val));
        }, $_POST['interets']);

        if (count($interets) >=2) {
            echo "<h2>Vos centres d'interets :</h2>";
            echo "<ul>";
            foreach ($interets as $item) {
                echo "<li>$item</li>";
            }
            echo "</ul>";
        }  else { if (count($interets) >=1){
                echo "<p style='color: red'>Veuillez cocher au moins deux centres d'interets</p>";
        }
            else {
            echo "<p style='color: red;'>Aucun centre d'interet selectionné</p>";
        } 
        } 

    }
    ?>
</body>
</html>