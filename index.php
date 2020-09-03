<!-- Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php
  $partite = [
    'Serie B' => [
      'team1' => 'Olimpia MIlano',
      'team2' => 'Cantù',
      'score1' => 55,
      'score2' => 50
    ],
    'Serie C' => [
  'team1' => 'Firenze',
  'team2' => 'Napoli',
  'score1' => 50,
  'score2' => 20
    ]
  ];

  $keys = array_keys($partite);
    for ($i=0;$i<count($keys);$i++) {
        $key = $keys[$i];
        $m = $partite[$key];
        echo $m['team1'] . ' - ' . $m['team2']
            . ' | ' . $m['score1'] . '-' . $m['score2']
            . '<br>';
          }
?>
<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->


<?php
  $name = $_GET['name'];
  $mail = $_GET['mail'];
  $age = $_GET['age'];

  $validName = strlen($name) > 3;
  $validMail = strpos($mail, '.') !== false && strpos($mail, '@') !== false;
  $validAge = is_numeric($age);
  var_dump($validAge); die();

  if ($validName && $validMail && $validAge) {
    echo "Accesso riuscito";
  } else {
    echo "Accesso negato";
  }
?>

<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->

<?php
  $arr = [];

  while (count($arr) <= 15) {

    $number = rand(1, 20);

    if (!in_array($numeber, $arr)) {
      $arr[] = $number;
     }
  }
  var_dump($arr);
?>
