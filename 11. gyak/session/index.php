<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Lejátszási lista</h1>
     <table>
         <?php
            if(file_exists("musics.json")){
                $json_szoveg = file_get_contents("musics.json");
                $zenek_tomb = json_decode($json_szoveg, true);
            }
            echo "<tr>";
            echo "<th>" . "Előadó". "</th>";
            echo "<th>" . "Cím". "</th>";
            echo "<th>" . "Év". "</th>";
            echo "<th>" . "Link". "</th>";
            echo "</tr>";
            for ($i=0; $i < count($zenek_tomb); $i++) {
               // if($zenek_tomb[$i]["ev"] == $_GET["ev"]){
                    echo "<tr>";
                    echo "<td>" . $zenek_tomb[$i]["eloado"]. "</td>";
                    echo "<td>" . $zenek_tomb[$i]["cim"]. "</td>";
                    echo "<td>" . $zenek_tomb[$i]["ev"]. "</td>";
                    echo "<td><a href='" . $zenek_tomb[$i]["link"]. "' target='_blank'>Ide kattints! </a></td>";
                    echo "</tr>";
              //  }       
            }
            ?>
    </table>
     </ul>
    <button onclick="window.location.href='addmusic.php'">ADJ HOZZÁ ÚJ ZENÉT!</button>
</body>
</html>