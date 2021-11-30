<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akita ELTEnyészet</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="main">
        <h1>Akita ELTEnyészet</h1>
    </div>
    <table>
        <tr>
           <th>
            <form action="index.php" method="get">
                <select name="nem" id="szures">
                    <option>Szűrés</option>
                    <option value="osszes">Összes</option>
                    <option value="kan">Kan</option>
                    <option value="szuka">Szuka</option>
                </select>
                </form>
           </th>
           <th>Név</th>
           <th>Szín</th>
           <th>Születési idő</th>
           <th>Nem</th>
        </tr>
         <?php
         
        $json_szoveg = file_get_contents("kutyuk.json");
        $kutyuk = json_decode($json_szoveg,true);
        $kutyaszinek = ["vörös","barna-fehér", "szürkésbarna-fehér", "fehér", "sötétbarna", "szürke"];
           
            for ($i=0; $i < count($kutyuk); $i++) {
                if(isset($_GET["nem"])){
                    if($kutyuk[$i]["nem"] == $_GET["nem"] ){
                        echo ($kutyuk[$i]["nem"] == "kan") ? "<tr class='kan'>" : "<tr class='szuka'>";
                        echo "<td><img src='pics/". $kutyuk[$i]["szin"] . ".jpg' </td>";
                        echo "<td>" . $kutyuk[$i]["nev"]. "</td>";
                        echo "<td>" . $kutyaszinek[$kutyuk[$i]["szin"]] . "</td>"; 
                        echo "<td>" . $kutyuk[$i]["szulido"]. "</td>";
                        echo "<td>" . $kutyuk[$i]["nem"]. "</td>";
                        echo "</tr>";
                    } 
                } else {
                    echo ($kutyuk[$i]["nem"] == "kan") ? "<tr class='kan'>" : "<tr class='szuka'>";
                    echo "<td><img src='pics/". $kutyuk[$i]["szin"] . ".jpg' </td>";
                    echo "<td>" . $kutyuk[$i]["nev"]. "</td>";
                    echo "<td>" . $kutyaszinek[$kutyuk[$i]["szin"]] . "</td>"; //
                    echo "<td>" . $kutyuk[$i]["szulido"]. "</td>";
                    echo "<td>" . $kutyuk[$i]["nem"]. "</td>";
                    echo "</tr>";
                }     
            }
            ?>
    </table>
    <button onclick="window.location.href='adddoggo.php'">Új kutya érkezett!</button>
    <script>
        let szures = document.querySelector("#szures");
        szures.addEventListener("change", function(){
            if(szures.value == "osszes") window.location.href='index.php';
            else window.location.href='index.php?nem=' + szures.value;
        })
    </script>
</body>
</html>