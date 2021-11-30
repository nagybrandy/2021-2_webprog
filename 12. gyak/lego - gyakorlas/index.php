<?php
$layout = [
  'width'   => 12,
  'height'  => 12,
  'pieces'  => [
    [
      'colour'  => 'brown',
      'x'       => 6,
      'y'       => 3,
      'width'   => 2,
      'height'  => 1,
    ],
    [
      'colour'  => 'yellow',
      'x'       => 6,
      'y'       => 4,
      'width'   => 2,
      'height'  => 4,
    ],
    [
      'colour'  => 'yellow',
      'x'       => 5,
      'y'       => 8,
      'width'   => 4,
      'height'  => 2,
    ],
    [
      'colour'  => 'green',
      'x'       => 5,
      'y'       => 4,
      'width'   => 1,
      'height'  => 4,
    ],
    [
      'colour'  => 'green',
      'x'       => 8,
      'y'       => 4,
      'width'   => 1,
      'height'  => 4,
    ],
    [
      'colour'  => 'green',
      'x'       => 4,
      'y'       => 7,
      'width'   => 1,
      'height'  => 4,
    ],
    [
      'colour'  => 'green',
      'x'       => 9,
      'y'       => 7,
      'width'   => 1,
      'height'  => 4,
    ],
    [
      'colour'  => 'green',
      'x'       => 5,
      'y'       => 10,
      'width'   => 1,
      'height'  => 1,
    ],
    [
      'colour'  => 'green',
      'x'       => 8,
      'y'       => 10,
      'width'   => 1,
      'height'  => 1,
    ],
    [
      'colour'  => 'green',
      'x'       => 5,
      'y'       => 11,
      'width'   => 4,
      'height'  => 1,
    ],
    [
      'colour'  => 'brown',
      'x'       => 6,
      'y'       => 10,
      'width'   => 2,
      'height'  => 1,
    ],
  ],
];

function get_piece_at($pieces, $i, $j) {
    foreach($pieces as $piece) {
      if (
        $j >= $piece['x'] && $j < $piece['x'] + $piece['width'] &&
        $i >= $piece['y'] && $i < $piece['y'] + $piece['height']
      ) {
        return $piece;
      }
    }
    return null;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
<h1>Alaprajz</h1>
  <table>
    <?php for($i = 1; $i <= $layout['height']; $i++): ?>
      <tr>
        <?php for($j = 1; $j <= $layout['width']; $j++): ?>
          <?php $piece = get_piece_at($layout['pieces'], $i, $j); ?>
          <?php if ($piece && $piece['x'] === $j && $piece['y'] === $i): ?>
            <td 
              rowspan="<?= $piece['height'] ?>" 
              colspan="<?= $piece['width'] ?>"
              style="background-color: <?= $piece['colour'] ?>; border: 2px solid <?= $piece['colour'] ?>;"
            ></td>
          <?php elseif (is_null($piece)): ?>
            <td></td>
          <?php endif ?>
        <?php endfor ?>
      </tr>
    <?php endfor ?>
  </table>
</body>
</html>