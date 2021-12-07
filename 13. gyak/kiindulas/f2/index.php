<?php

$prices = [
  'oops'      => '690',
  'pidgeon'   => '1090',
  'trycycle'  => '1590',
];

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
        <option value="oops">Oops!</option>
        <option value="pidgeon">Pidgeon</option>
        <option value="trycycle">TryCycle</option>
      </select>
    </div>
    <div>
      <label for="postal_code">Irányítószám</label>
      <input type="text" id="postal_code" name="postal_code">
    </div>
    <div>
      <label for="street">Közterület neve</label>
      <input type="text" id="street" name="street">
    </div>
    <div>
      <label for="house_number">Házszám</label>
      <input type="text" id="house_number" name="house_number">
    </div>
    <div>
      <label for="other">Egyéb</label>
      <input type="text" id="other" name="other">
    </div>
    <div>
      <button type="submit">Szállítási költség kalkulálása</button>
    </div>
  </form>

  <h2>Üzenetek</h2>
  <ul>
      <li>Hibaüzenet1</li>
      <li>Hibaüzenet2</li>
  </ul>
  <p>
    Szállítási költség: 1234 Ft
  </p>

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