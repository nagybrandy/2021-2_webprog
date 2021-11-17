<?php
    if(startsWith($_SERVER["REMOTE_ADDR"], "157.181")){
        echo "Nincs hozzáférés";
        exit();
    }

    function startsWith ($string, $startString)
    {
        $len = strlen($startString);
        return (substr($string, 0, $len) === $startString);
    }

    function letezik($valtozonev){
        return isset($_POST[$valtozonev]) && strlen(trim($_POST[$valtozonev])) > 0;
    }
    $nev = "noname";
    $szin = "#FFFFFF";
    if(count($_POST) > 0) {
        $errors = [];
        if(!letezik("nev")){
            $errors[] = "Adj meg egy nevet!";
            
        } else {
            $nev = $_POST["nev"];
        }

        if(!letezik("szin")){
            $errors[] = "Adj meg egy szint!";
        } else {
            $szin = $_POST["szin"];
        }
    } else {
        $errors[] = "Töltsd ki a formot!"; 
    }
    $eredmeny = "Nem jó értékeket adtál meg";

    if(letezik("a") && letezik("b") && letezik("c")) {
        $a = intval($_POST["a"]);
        $b = intval($_POST["b"]);
        echo $a + $b;
        $c = intval($_POST["c"]);
        if(is_numeric($_POST["a"]) && is_numeric($_POST["b"]) && is_numeric($_POST["c"])){
            $eredmeny = roots($a, $b, $c);
        } else {
            $errors[] = "SZÁMOT ADJ MEG!";
        }
        
    } else {
        $errors[] = "Mindhárom értéket add meg!";
    }
   

    function roots($a, $b, $c) {
        $D = $b*$b - 4*$a*$c;
        if ($D >= 0){
          $x1 = (-$b + sqrt($D))/(2*$a);
          $x2 = (-$b - sqrt($D))/(2*$a);
          echo "Roots are: $x1, $x2 \n";   
        } else {
          $x1 = -$b/(2*$a);
          $x2 = sqrt(-$D)/(2*$a);
          return "Roots are: $x1 ± $x2 i \n"; 
        }
      }
    // is_numeric() ---> SZÁM-E
    // intval() --> int legyen
    // floatval() --> float legyen
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?php echo $_POST["szin"]; ?> ">
    <h1>Hello <?php echo $nev; // (condition) ? lefut ha igaz : lefut ha hamis ?>  </h1> 
    <h2><?php echo $eredmeny;?></h2>
    <?php var_dump($_POST) ?>

    <a href="form.php?szin=blue">Kék lesz az oldal!</a>
    <?php include "alma.php"; ?>
    <?php if ($errors) : ?>
        <ul>
        <?php foreach($errors as $error) : ?>
            <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form action="form.php" method="POST">
    <input type="text" name="nev">
    <input type="color" name="szin" id="" value="#FFFFFF">
    <input type="text" name="a" id="">
    <input type="text" name="b" id="">
    <input type="text" name="c" id="">
    <button type="submit">Küldés</button>
    </form>
</body>
</html>