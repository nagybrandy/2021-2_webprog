<?php
    if(!startsWith($_SERVER["REMOTE_ADDR"], "157.181")){
        echo "Nincs hozzáférés";
        exit();
    }

    function startsWith ($string, $startString)
    {
        $len = strlen($startString);
        return (substr($string, 0, $len) === $startString);
    }
    
    function letezik($valtozonev) {
        return isset($_GET[$valtozonev]) && strlen(trim($_GET[$valtozonev])) > 0;
    }
     $name = (letezik("nev")) ? $_GET["nev"] : "noname";
     $szin = (letezik("szin")) ? $_GET["szin"] : "white";
     $errors = [];
     if(count($_GET) > 0){
        
        if(!letezik("nev")) $errors[] = "Adj meg egy nevet!";
        else $nev = $_GET["nev"];
        
        if(!letezik("szin")) $errors[] = "Adj meg egy színt!";
        else $szin = $_GET["szin"];
    
    } else {
        $errors[] = "Töltsd ki a formot!";
     }
     
     // is_numeric() --> szám-e
     // intval() --> intté konvertálni
     // floatval() --> float lesz
     $eredmeny = "Nem jó értékeket adtál meg";
     if(letezik("a") && letezik("b") && letezik("c")) {
        $a = intval($_GET["a"]);
        $b = intval($_GET["b"]);
        // echo $a + $b;
        $c = intval($_GET["c"]);
        if(is_numeric($_GET["a"]) && is_numeric($_GET["b"]) && is_numeric($_GET["c"])){
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
          return "Roots are: $x1, $x2 \n";   
        } else {
          $x1 = -$b/(2*$a);
          $x2 = sqrt(-$D)/(2*$a);
        return "Roots are: $x1 ± $x2 i \n"; 
        }
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: <?php echo $_GET["szin"] ?> ">
    <h1>Hello <?php echo $name // (condition) ? ha igaz : ha hamis?></h1>
   
    <?php var_dump($_GET) ?>
    <h2><?php echo $eredmeny;?></h2>
    <?php if ($errors) : ?>
        <ul>
        <?php foreach($errors as $error) : ?>
            <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?php include 'alma.php' ; ?>

    <h2>Forma</h2>
    <form action="form.php" method="get">
        Név: <input type="text" name="nev">
        <input type="color" name="szin" id="" value="#FFFFFF">
        <br><br>
        <p>Másodfokú egyenlet</p>
        a: <input type="text" name="a">
        b: <input type="text" name="b">
        c: <input type="text" name="c">
        <button type="submit">Küldés</button>
    </form>
        
    
    <br>
    <a href="form.php?nev=Bendi&szin=blue">Kék háttér</a>
</body>
</html>