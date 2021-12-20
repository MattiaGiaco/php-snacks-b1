<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

var_dump($posts);

$keys = array_keys($posts);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 3</title>
</head>
<body>
  
  <?php
    for($i = 0; $i < count($keys); $i++) {
      echo "<br><div>Data: " . $keys[$i] . "</div>";
      $content = $keys[$i];

      //var_dump($posts[$content]);
      for($j = 0; $j < count($posts[$content]); $j++) {
          echo "<h3>Titolo post: " . $posts[$content][$j]["title"] . "</h3>";
          echo "<p>Testo: " . $posts[$content][$j]["text"] . "</p>";
          echo "<div>Autore: " . $posts[$content][$j]["author"] . "</div>";
      }
    }
  ?>
  
</body>
</html>