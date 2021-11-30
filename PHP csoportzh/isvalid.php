<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Új kutyus érkezett!</title>
    <link rel="stylesheet" href="style.css">
    <title>Mentés</title>
</head>
<body>
<?php
    function letezik($valtozonev){
        return isset($_POST[$valtozonev]) && strlen(trim($_POST[$valtozonev])) > 0;
    }
    $errors = [];
    $uj_nev = $_POST["nev"];
    $uj_szin = intval($_POST["szin"]);
    $uj_szulido = $_POST["szulido"];
    $uj_nem = $_POST["nem"];
    $json_szoveg = file_get_contents("kutyuk.json");
    $kutyuk = json_decode($json_szoveg,true);
    if(!letezik("nev")){
     $errors[]= "Nem adtál meg nevet!";
    } 
    if(!letezik("szulido")){
        $errors[]= "Nem adtál meg születési dátumot!";
    }    
    if(!letezik("nem")){
        $errors[]= "Nem adtál meg nemet!";
    }    
   if(count($errors) < 1) 
   {
        $ujadat = [
            "nev" => $uj_nev,
            "szin" => $uj_szin,
            "szulido" => $uj_szulido,
            "nem" => $uj_nem
        ];
        array_push($kutyuk, $ujadat);
        $uj_tomb = json_encode($kutyuk, JSON_PRETTY_PRINT);
        file_put_contents("kutyuk.json", $uj_tomb);
    }
?>
<div id="main">
        <h1><?php echo (count($errors) < 1) ? "Siker 😍" : "Nem sikerült 😿"; ?></h1>
</div>

<?php if ($errors) : ?>
        <ul style="font-size: 25px;color: red;">
        <?php foreach($errors as $error) : ?>
            <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
<?php endif; ?>
<?php
  if(count($errors) < 1) echo "<button onclick=". "window.location.href='index.php'" . ">Vissza a főoldalra</button>";
  else echo "<button onclick=". "window.location.href='adddoggo.php'" . ">Új kutya érkezett</button>";
?>

</body>
</html>