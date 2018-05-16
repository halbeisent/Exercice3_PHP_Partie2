<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>Exercice 3 Partie 2 PHP</title>
</head>
<body>
  <p>
    <?php
    $age = 24;
    $genre = 'homme';
    echo 'le contenu de ma variable $age est ' . $age . '<br />';
    echo 'le contenu de ma variable $genre est ' . $genre . '<br />';
    // On indique qu'on travaille sur la variable $genre
    if (($age <= 18) AND ($genre == 'femme')) {
      echo 'Vous êtes une femme mineure';
    } elseif (($age <= 18) AND ($genre == 'homme')) {
      echo 'Vous êtes un homme mineur';
    } elseif (($age > 18) AND ($genre == 'femme')) {
      echo 'Vous êtes une femme majeure';
    } else {
      echo 'Vous êtes un homme majeur';
    }
    ?>
  </p>
</body>
</html>
