<?php
 
  $db = [
    'teachers' => [
      [
          'name' => 'Michele',
          'lastname' => 'Papagni'
      ],
      [
          'name' => 'Fabio',
          'lastname' => 'Forghieri'
      ]
    ],
    'pm' => [
      [
          'name' => 'Roberto',
          'lastname' => 'Marazzini'
      ],
      [
          'name' => 'Federico',
          'lastname' => 'Pellegrini'
      ]
    ]
  ];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 6</title>
</head>
<body>
  <div style="display: flex;">
    <div class="gray" style="background-color: gray; width:50%">
      <h2>Teachers</h2>
      <?php
        for ($i=0; $i < count($db['teachers']); $i++) { 
          echo $db['teachers'][$i]['name']." ".$db['teachers'][$i]['lastname']."<br>";
        }
      ?>
    </div>
    <div class="green" style="background-color: green; width:50%">
        <h2>Db</h2>
      <?php
        for ($i=0; $i < count($db['teachers']); $i++) { 
          echo $db['pm'][$i]['name']." ".$db['pm'][$i]['lastname']."<br>";
        }
      ?>
    </div>
  </div>
</body>
</html>