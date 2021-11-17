<?php

/**
 * Ellenőrzi, hogy adott paraméter létezik-e a GET requestben, és értelmezhető-e (nem üres).
 * @param String $param ebből egy `$_GET[$param]` értéket csinál belül a függvény, és ellenőrzi.
 * @return bool igaz, ha nem üres az adat.
 */
function letezik($param)
{
    return isset($_GET[$param]) && strlen(trim($_GET[$param])) > 0;
}
$errors = [];
$szin = (letezik("szin")) ? $_GET["szin"]:"white";
if(!letezik("nev")) {
    $errors[] = "nem adtál meg nevet";
}
$name = (letezik("nev")) ? $_GET["nev"]:"noname";


 /*egész szám
 if (!letezik("egesz")) {
    $hibak[] = "Nem adtál meg egész számot!";
} else if (!is_numeric($_GET["egesz"])) {
    $hibak[] = "Nem számértéket adtál meg egésznek";
} else if (intval($_GET["egesz"]) !=  floatval($_GET["egesz"])) {
    $hibak[] = "Nem egész számot adtál meg!";
} else {
    $eredmeny["egesz"] = intval($_GET["egesz"]);
}*/


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <body style="background-color: <?php echo $szin ?>">
    <h1>hali <?php echo $name ?></h1>
    <?php var_dump($_GET) ?>


<?php if ($errors) : ?>
  <ul>
    <?php foreach($errors as $error) : ?>
      <li><?= $error ?></li>
    <?php endforeach ?>
  </ul>
<?php endif ?>

    <form action="nev.php" method="get">
        <input type="text" name="nev">
        <input type="color" name="szin" id="">
        <input type="number" name="a">
        <input type="number" name="b">
        <input type="number" name="c">
        <input type="submit" value="Submit">
    </form>
</body>
</html>