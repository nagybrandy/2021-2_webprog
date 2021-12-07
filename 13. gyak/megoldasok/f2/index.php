<?php

$prices = [
  'oops'      => '690',
  'pidgeon'   => '1090',
  'trycycle'  => '1590',
];

function validate($get, &$data, &$errors, $prices) {
  if (!isset($get['delivery_company']) || trim($get['delivery_company']) === '') {
    $errors['delivery_company'] = 'Szállítócég hiányzik!';
  }
  elseif (!in_array($get['delivery_company'], array_keys($prices))) {
    $errors['delivery_company'] = 'Hibás szállítócég!';
  }
  else {
    $data['delivery_company'] = $get['delivery_company'];
  }

  if (!isset($get['postal_code']) || trim($get['postal_code']) === '') {
    $errors['postal_code'] = 'Irányítószám hiányzik!';
  }
  elseif (filter_var($get['postal_code'], FILTER_VALIDATE_REGEXP, [
    "options"=>[
      "regexp"=>"/^\d{4}$/",
    ],
  ]) === false) {
    $errors['postal_code'] = 'Az irányítószám nem megfelelő formátumú (4 hosszú, számjegyekből áll)!';
  }
  else {
    $data['postal_code'] = $get['postal_code'];
  }

  if (!isset($get['street']) || trim($get['street']) === '') {
    $errors['street'] = 'Közterület hiányzik!';
  }
  else {
    $arr = explode(' ', $get['street']);
    if (count($arr) < 2) {
      $errors['street'] = 'Közterületben nincs szóköz!';
    }
    elseif (!in_array($arr[count($arr) - 1], ['utca', 'út', 'tér'])) {
      $errors['street'] = 'Közterület jellege helytelen!';
    }
    else {
      $data['street'] = $get['street'];
    }
  }

  if (!isset($get['house_number']) || trim($get['house_number']) === '') {
    $errors['house_number'] = 'Házszám hiányzik!';
  }
  elseif (filter_var($get['house_number'], FILTER_VALIDATE_INT) === false) {
    $errors['house_number'] = 'A házszám nem szám!';
  }
  else {
    $data['house_number'] = (int)$get['house_number'];
  }
  
  return count($errors) === 0;
}

$errors = [];
if (count($_GET) > 0) {
  if (validate($_GET, $data, $errors, $prices)) {
    $comp = $data['delivery_company'];
    $price = $prices[$comp];
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Szállítási költség kalkulátor</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
  <h1>Szállítási költség kalkulátor</h1>
  <form action="" method="get" novalidate>
    <div>
      <label for="delivery_company">Szállítócég</label>
      <select id="delivery_company" name="delivery_company">
        <option value="">Kérem, válasszon!</option>
        <option value="oops" <?= isset($_GET['delivery_company']) && $_GET['delivery_company'] === 'oops' ? 'selected' : '' ?>>Oops!</option>
        <option value="pidgeon" <?= isset($_GET['delivery_company']) && $_GET['delivery_company'] === 'pidgeon' ? 'selected' : '' ?>>Pidgeon</option>
        <option value="trycycle" <?= isset($_GET['delivery_company']) && $_GET['delivery_company'] === 'trycycle' ? 'selected' : '' ?>>TryCycle</option>
      </select>
    </div>
    <div>
      <label for="postal_code">Irányítószám</label>
      <input type="text" id="postal_code" name="postal_code" value="<?= $_GET['postal_code'] ?? '' ?>">
    </div>
    <div>
      <label for="street">Közterület neve</label>
      <input type="text" id="street" name="street" value="<?= $_GET['street'] ?? '' ?>">
    </div>
    <div>
      <label for="house_number">Házszám</label>
      <input type="text" id="house_number" name="house_number" value="<?= $_GET['house_number'] ?? '' ?>">
    </div>
    <div>
      <label for="other">Egyéb</label>
      <input type="text" id="other" name="other" value="<?= $_GET['other'] ?? '' ?>">
    </div>
    <div>
      <button type="submit">Szállítási költség kalkulálása</button>
    </div>
  </form>

  <h2>Üzenetek</h2>
  <?php if(count($errors) > 0): ?>
    <ul>
      <?php foreach($errors as $error): ?>
        <li><?=$error?></li>
      <?php endforeach ?>
    </ul>
  <?php elseif (isset($price)): ?>
    Szállítási költség: <?= $price ?> Ft
  <?php endif ?>

  <h2>Linkek</h2>
  <ul>
    <li><a href="?">Semmi</a></li>
    <li><a href="?other=">?other=</a></li>
    <li><a href="?delivery_company=">?delivery_company=</a></li>
    <li><a href="?delivery_company=rossz">?delivery_company=rossz</a></li>
    <li><a href="?postal_code=">?postal_code=</a></li>
    <li><a href="?postal_code=negy">?postal_code=negy</a></li>
    <li><a href="?postal_code=12345">?postal_code=12345</a></li>
    <li><a href="?postal_code=123">?postal_code=123</a></li>
    <li><a href="?postal_code=1234">?postal_code=1234</a></li>
    <li><a href="?street=">?street=</a></li>
    <li><a href="?street=Hosszu">?street=Hosszu</a></li>
    <li><a href="?street=Hosszu%20koz">?street=Hosszu%20koz</a></li>
    <li><a href="?street=Hosszu%20utca">?street=Hosszu%20utca</a></li>
    <li><a href="?house_number=">?house_number=</a></li>
    <li><a href="?house_number=egy">?house_number=egy</a></li>
    <li><a href="?house_number=1">?house_number=1</a></li>
    <li><a href="?delivery_company=trycycle&postal_code=1234&street=Hosszú+út&house_number=12&other=1. em. 2.">?delivery_company=trycycle&postal_code=1234&street=Hosszú+út&house_number=12&other=</a></li>
  </ul>
</body>
</html>