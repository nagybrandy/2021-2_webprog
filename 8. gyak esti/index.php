<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php  
    // $name = "Jeromos";
    // echo $name;
    date_default_timezone_set("Asia/Tokyo");
    echo date("Y-m-d H:i:s");
    ?></h1>

    <div id="factorial">
        <?php
        function fact($num){
            $factorial = 1;  
            for ($x=$num; $x>=1; $x--)   
            {  
                $factorial = $factorial * $x;  
            }

            echo "<span style='color:red'>{$num}-es szám faktoriálisa: $factorial</span>";  
        }
        
        function tizszer(){
            for ($i=1; $i <= 3; $i++) {
                $size = 10*$i;
                echo "<p style='font-size: {$size}px'>Hello világ</p>"; 
            }
        }
        

        fact(4);
        tizszer();

        ?>
        <ul>
            <?php
                $tomb = ["Error1", "Error2", "Error3"];
                //$tomb[1]
                foreach($tomb as $error) {
                    echo "<li>$error</li>"; 
                }
            ?>
        </ul>

        <select name="" id="">
            <?php
                $mufajok = ["Vígjáték" => 5, "Akció" => 3, "Dráma" => 8];
                foreach($mufajok as $mufaj => $ertek){
                    echo "<option value='". $ertek . "'>"  . $mufaj . "</option>";
                }

        

            ?>

        </select>

    </div>

    <?php 
        $teszt = [
            ["Kérdés1", "a", "b", "c", "a"],
            ["Kérdés2", "a", "b", "c", "a"],
            ["Kérdés3", "a", "b", "c", "a"]
        ];
        foreach($teszt as $key => $value) {
            echo $value[0] . "<br>";
            for ($i=1; $i<=3 ; $i++) { 
                echo "<input type='checkbox' name='$key'>{$value[$i]}<br>"; //radio ha egy jó megoldás, checkbox ha több
            }
        }
    ?>
</body>
</html>