<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   /* date_default_timezone_set('Asia/Hong_Kong');
    $name = "Bendi";
   // echo date("Y-m-d H:i:s");
    function fact($num){
        $num = 4;  
        $factorial = 1;  
        for ($x=$num; $x>=1; $x--)   
        {  
            $factorial = $factorial * $x;  
        }s
        return $factorial;
    }
    $num = 4;
    echo "$num faktoriálisa: " . fact($num);*/
    
    $hibalista = array("Error1","Error1","Error1");
    $_2d = array(
        array("Error1","Error1","Error1"),
        array("Error1","Error1","Error1")
    );
    function nov(){
        for($i = 0; $i<10;$i++){
            $size = $i*10;
            echo "<h1 style='font-size: {$size}px'>Hello világ!</h1>";
        }
    }
    nov()
   ?> 
    <ul>
    <?php
        $errorList = ["error1", "error2", "error3"];
        foreach($errorList as $error){
            echo "<li>$error</li>";
        }
    ?>
    </ul>

    <select name="" id="">
        <?php 
            $filmtipusok = ["Akció" => 5, "Vigjatek" => 8, "Kaland" => 3];
            foreach($filmtipusok as $filmTipus => $filmKey){
                echo "<option value='$filmKey'>$filmTipus</option>";
            }

            $teszt = [
                        ["Milyen szinu?", "zöld", "piros", "kék", "sárga", "piros" ],
                        ["Milyen szinu?", "zöld", "piros", "kék", "sárga", "piros" ],
                        ["Milyen szinu?", "zöld", "piros", "kék", "sárga", "piros" ]
                    ]
        ?>
    </select>
    <form>
        <?php
            $teszt = [  ["Kerdes1", "valasz1", "valasz2", "valasz3", "valasz2"],
                        ["Kerdes2", "valasz1", "valasz2", "valasz3", "valasz2"],
                        ["Kerdes3", "valasz1", "valasz2", "valasz3", "valasz2"],
                        ["Kerdes4", "valasz1", "valasz2", "valasz3", "valasz2"]];
            $num = 1;
            foreach($teszt as $kerdes){
                echo "<label>" . $kerdes[0] . "</label>";
                echo "<br/>";
                echo "<input type='checkbox' name='$num'>" . $kerdes[1] . "</input>";
                echo "<br/>";
                echo "<input type='checkbox' name='$num'>" . $kerdes[2] . "</input>";
                echo "<br/>";
                echo "<input type='checkbox' name='$num'>" . $kerdes[3] . "</input>";
                echo "<br/>";
                $num = $num + 1;                
            }
        ?>
    </form>
</body>
</html>